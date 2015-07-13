/**
 * Created by chris on 7/12/15.
 */

// vues for leave behind pages
var newLeaveBehind = new Vue({
    el: '#createLeaveBehind',

    data: {
        name: "",
        bio: "",
        created: false,
        point_of_contacts: [{
            first_name: "",
            last_name: "",
            phone_num_1: "",
            phone_num_2: "",
            email: ""
        }]
    },

    methods: {
        //on click function
        createNewLeaveBehind: function () {
            postToStoreLeaveBehind(newLeaveBehind._data)
        },

        // on click function
        addNewPocToArray: function () {
            newLeaveBehind.point_of_contacts.push({
                    first_name: "",
                    last_name: "",
                    phone_num_1: "",
                    phone_num_2: "",
                    email: ""
                }
            )
        }
    }
});

var viewLeaveBehind = new Vue({
    el: '#viewLeaveBehind',

    methods: {
        //on click function
        deleteLeaveBehind: function (id) {
            postToDeleteLeaveBehind(id)
        }
    }

});

//JS for leave behind pages
function postToStoreLeaveBehind(data) {
    //need to add crsf token to axaj headers
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

    $.post("storeLeaveBehind", data, function (data) {
        if (data == 'success') {
            newLeaveBehind._data.created = true;
        }
    });
}

function postToDeleteLeaveBehind(id) {
    //need to add crsf token to axaj headers
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

    $.post("deleteLeaveBehind", {'id': id}, function (data) {
        if (data == 'deleted') {
            location.reload();
        }
    });
}
