/*!
 * jQuery QueryBuilder 2.3.3
 * Locale: indonesia (in)
 * Author: Edy "prasetiyo" 082210160003
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */

(function(root, factory) {
    if (typeof define == 'function' && define.amd) {
        define(['jquery', 'query-builder'], factory);
    } else {
        factory(root.jQuery);
    }
}(this, function($) {
    "use strict";

    var QueryBuilder = $.fn.queryBuilder;

    QueryBuilder.regional['in'] = {
        "__locale": "Indonesia (in)",
        "__author": " \"\" ,",
        "add_rule": "Tambahkan rule",
        "add_group": "Tambahkan grup",
        "delete_rule": "Hapus",
        "delete_group": "Hapus",
        "conditions": {
            "AND": "AND",
            "OR": "OR"
        },
        "operators": {
            "equal": "sama dengan",
            "not_equal": "tidak sama dengan",
            "in": "dalam",
            "not_in": "tidak di dalam",
            "less": "kurang",
            "less_or_equal": "kurang dari atau sama dengan",
            "greater": "lebih dari",
            "greater_or_equal": "lebih dari atau sama dengan",
            "between": "diantara",
            "not_between": "tidak diantara ",
            "begins_with": "dimulai dari ",
            "not_begins_with": "doesn't begin with",
            "contains": "contains",
            "not_contains": "doesn't contain",
            "ends_with": "ends with",
            "not_ends_with": "doesn't end with",
            "is_empty": "kosong",
            "is_not_empty": "tidak kosong",
            "is_null": "is null",
            "is_not_null": "is not null"
        },
        "errors": {
            "no_filter": "Tidak Ada Pemilihan Filter",
            "empty_group": "Group yang di pilih kosong",
            "radio_empty": "Tidak ada radio yang dipilih",
            "checkbox_empty": "Tidak ada checkbox yang dipilih",
            "select_empty": "No value selected",
            "string_empty": "Empty value",
            "string_exceed_min_length": "Must contain at least {0} characters",
            "string_exceed_max_length": "Must not contain more than {0} characters",
            "string_invalid_format": "Invalid format ({0})",
            "number_nan": "Not a number",
            "number_not_integer": "Not an integer",
            "number_not_double": "Not a real number",
            "number_exceed_min": "Must be greater than {0}",
            "number_exceed_max": "Must be lower than {0}",
            "number_wrong_step": "Must be a multiple of {0}",
            "datetime_empty": "Empty value",
            "datetime_invalid": "Invalid date format ({0})",
            "datetime_exceed_min": "Must be after {0}",
            "datetime_exceed_max": "Must be before {0}",
            "boolean_not_valid": "Not a boolean",
            "operator_not_multiple": "Operator {0} cannot accept multiple values"
        },
        "invert": "Invert"
    };

    QueryBuilder.defaults({
        lang_code: 'en'
    });
}));
