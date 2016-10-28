function setKursor(IdElementNya___, Indeksnya) {
    var el = document.getElementById(IdElementNya___);

    el.value = el.value;


    if (el !== null) {

        if (el.createTextRange) {
            var range = el.createTextRange();
            range.move('character', Indeksnya);
            range.select();
            return true;
        }

        else {
            // (el.selectionStart === 0 added for Firefox bug)
            if (el.selectionStart || el.selectionStart === 0) {
                el.focus();
                el.setSelectionRange(Indeksnya, Indeksnya);
                return true;
            }
            else  {
                el.focus();
                return false;
            }
        }
    }
}
// butuh jquery
