function check(checked = true) {
    const cbs = document.querySelectorAll('input[name="productschoose[]"]');
    cbs.forEach((cb) => {
        cb.checked = checked;
    });
}

const btn = document.querySelector('#butt');
butt.onclick = checkAll;

function checkAll() {
    check();
    this.onclick = uncheckAll;
}

function uncheckAll() {
    check(false);
    this.onclick = checkAll;
}

