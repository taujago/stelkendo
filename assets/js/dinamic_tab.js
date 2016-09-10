//this method will demonstrate how to add tab dynamically

function registerComposeButtonEvent(target) {
    var tabId = target.innerHTML;
    tabId = tabId.replace(/ /g, "_"); // ganti spasi menjadi underscore
    //alert(tabId);
    // tambah dynamic tab dan konten tab .append(html kode);
    $('.nav-pills').append('<li class="" ><a href="#' + tabId + '"><button class="close closeTab" type="button" >×</button>' + target.innerHTML + '</a></li>');
    $('.tab-content').append('<div class="tab-pane " id="' + tabId + '"></div>');
    //send
    var status = craeteNewTabAndLoadUrl("", target.href, "#" + tabId);
    //alert("status="+status);
    //if(status=="ok"){
    $(this).tab('show');
    showTab(tabId);
    registerCloseEvent();
    //}else{}

}

//this method will register event on close icon on the tab..
function registerCloseEvent() {

    $(".closeTab").click(function() {
        //there are multiple elements which has .closeTab icon so close the tab whose close icon is clicked
        var tabContentId = $(this).parent().attr("href");
        $(this).parent().parent().remove(); //remove li of tab
        $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
        $(tabContentId).remove(); //remove respective tab content

    });

}

//shows the tab with passed content div id..paramter tabid indicates the div where the content resides
function showTab(tabId) {
    $('#idTabKendaraanBaru a[href="#' + tabId + '"]').tab('show');

}
//return current active tab
function getCurrentTab() {
    return currentTab;
}

//This function will create a new tab here and it will load the url content in tab content div.
function craeteNewTabAndLoadUrl(parms, url, loadDivSelector) {
    var msg = "";
    $("" + loadDivSelector).load(url, function(response, status, xhr) {
        //alert(msg);
        if (status == "success") {
            msg = "ok";
        } else if (status == "error" || status == "error") {
            msg = "Error :";
            $("" + loadDivSelector).html(msg + xhr.status + " " + xhr.statusText);
            $("" + loadDivSelector).html("Load Ajax Content Here...");
        }

    });

    return msg; // return value untuk action open new tab

}

//this will return element from current tab
//example : if there are two tabs having  textarea with same id or same class name then when $("#someId") whill return both the text area from both tabs
//to take care this situation we need get the element from current tab.
function getElement(selector) {
    var tabContentId = $currentTab.attr("href");
    return $("" + tabContentId).find("" + selector);

}


function removeCurrentTab() {
    var tabContentId = $currentTab.attr("href");
    $currentTab.parent().remove(); //remove li of tab
    $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
    $(tabContentId).remove(); //remove respective tab content
}
