<?php

class Guru_List_Table extends WP_List_Table
{
    public function __construct()
    {
        parent::__construct([
            "singular" => "guru", // Singular name of the listed records.
            "plural" => "gurus", // Plural name of the listed records.
            "ajax" => false, // Does this table support ajax?
        ]);
    }

    public function get_columns()
    {
        $columns = [
            "cb" => '<input type="checkbox" />', // Render a checkbox instead of text.
            "name" => _x(
                "Nama Lengkap Guru",
                "Column label",
                "wp-list-table-guru"
            ),
            "mapel" => _x("Mengajar", "Column label", "wp-list-table-guru"),
            "deskripsi" => _x(
                "deskripsi",
                "Column label",
                "wp-list-table-guru"
            ),
            "image_url" => _x("Profil", "Column label", "wp-list-table-guru"),
        ];

        return $columns;
    }

    public function objectToArray($obj)
    {
        if (is_object($obj)) {
            $obj = (array) $obj;
        }
        if (is_array($obj)) {
            $new = [];
            foreach ($obj as $key => $val) {
                $new[$key] = $this->objectToArray($val);
            }
        } else {
            $new = $obj;
        }
        return $new;
    }

    protected function get_sortable_columns()
    {
        $sortable_columns = [
            "name" => ["name", false],
        ];

        return $sortable_columns;
    }

    protected function column_default($item, $column_name)
    {
        switch ($column_name) {
            case "name":
                return $item["name"];
            case "mapel":
                return $item["mapel"];
            case "deskripsi":
                return $item["description"];
            case "image_url":
                return $item["image_url"];
            default:
                return print_r($item, true); // Show the whole array for troubleshooting purposes.
        }
    }

    protected function column_image_url($item)
    {
        return sprintf('<img src="%1$s" width="100px">', $item["image_url"]);
    }

    protected function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="%1$s[]" value="%2$s" />',
            $this->_args["singular"], // Let's simply repurpose the table's singular label ("movie").
            $item["id"] // The value of the checkbox should be the record's id.
        );
    }

    protected function column_name($item)
    {
        $page = wp_unslash($_REQUEST["page"]); // WPCS: Input var ok.

        // Build edit row action.
        $edit_query_args = [
            "page" => $page,
            "action" => "edit",
            "id" => $item["id"],
        ];

        $actions["edit"] = sprintf(
            '<a href="%1$s">%2$s</a>',
            esc_url(
                wp_nonce_url(
                    add_query_arg($edit_query_args, "admin.php"),
                    "editpendaftaran_" . $item["id"]
                )
            ),
            _x("Edit", "List table row action", "wp-list-table-guru")
        );

        // Build delete row action.
        $delete_query_args = [
            "page" => $page,
            "action" => "delete",
            "id" => $item["id"],
        ];

        $actions["delete"] = sprintf(
            '<a href="%1$s">%2$s</a>',
            esc_url(
                wp_nonce_url(
                    add_query_arg($delete_query_args, "admin.php"),
                    "deletependaftaran_" . $item["id"]
                )
            ),
            _x("Delete", "List table row action", "wp-list-table-guru")
        );

        // Return the title contents.
        return sprintf(
            '%1$s <span style="color:silver;"></span>%2$s',
            $item["name"],
            // $item['id'],
            $this->row_actions($actions)
        );
    }

    protected function get_bulk_actions()
    {
        $actions = [
            "delete" => _x(
                "Delete",
                "List table bulk action",
                "wp-list-table-guru"
            ),
            "view" => _x(
                "View",
                "List table bulk action",
                "wp-list-table-guru"
            ),
        ];

        return $actions;
    }

    protected function process_bulk_action()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "guru";
        // Detect when a bulk action is being triggered.
        if ("delete" === $this->current_action()) {
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $result = $wpdb->delete($table_name, ["id" => $id]);
                if ($result === false) {
                    echo "Terjadi error saat melakukan operasi delete: " .
                        $wpdb->last_error;
                } else {
                    echo '<div class="notice notice-success is-dismissible"><p>' .
                        __("Data berhasil dihapus", "textdomain") .
                        "</p></div>";
                }
            } else {
                wp_die(
                    "Items deleted (or they would be if we had items to delete)!"
                );
            }
        }

        if ("view" === $this->current_action()) {
            wp_die("Items view (or they would be if we had items to delete)!");
        }
    }

    function prepare_items()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "guru";
        $per_page = 5;
        $columns = $this->get_columns();
        $hidden = [];
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = [$columns, $hidden, $sortable];
        $this->process_bulk_action();
        $query = "SELECT * FROM $table_name ";
        $data = $this->objectToArray($wpdb->get_results($query));
        usort($data, [$this, "usort_reorder"]);
        $current_page = $this->get_pagenum();
        $total_items = $wpdb->query($query);
        $this->items = $data;
        $this->set_pagination_args([
            "total_items" => $total_items, // WE have to calculate the total number of items.
            "per_page" => $per_page, // WE have to determine how many items to show on a page.
            "total_pages" => ceil($total_items / $per_page), // WE have to calculate the total number of pages.
        ]);
    }

    protected function usort_reorder($a, $b)
    {
        // If no sort, default to title.
        $orderby = !empty($_REQUEST["orderby"])
            ? wp_unslash($_REQUEST["orderby"])
            : "name"; // WPCS: Input var ok.

        // If no order, default to asc.
        $order = !empty($_REQUEST["order"])
            ? wp_unslash($_REQUEST["order"])
            : "asc"; // WPCS: Input var ok.

        // Determine sort order.
        $result = strcmp($a[$orderby], $b[$orderby]);

        return "asc" === $order ? $result : -$result;
    }
}
