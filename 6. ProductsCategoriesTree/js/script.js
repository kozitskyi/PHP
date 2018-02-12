$(function ()
{
    $('#jstree').jstree({
        "core": {
            "animation": 0,
            "check_callback": true,
            "themes": {"stripes": true},
            'data': {
                'url': 'php/index.php',
                'data': function (node) {
                    return {'id': node.id};
                }
            }
        },
        "plugins": [
            "contextmenu", "dnd", "search",
            "state", "types", "wholerow", "themes", "ui"
        ]
    });
});

//simple variant:
// $(function () {
//     $("#jstree").jstree({
//         'core' : {
//             "theme" : {
//                 "variant" : "large"
//             },
//             'data': {
//                 'url': 'php/index.php',
//                 'data': function (node) {
//                     return {'id': node.id};
//                 }
//             }
//         }
//     });
// });