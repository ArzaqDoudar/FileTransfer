$("input[type='image']").click(function() {
    $("input[id='hiddenFile']").click();
});

function copyFunction() {
    var copyText = document.getElementById("link");

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.href);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.href);
}