sel_ = null;
function avoid(r) {
  if (sel_ != null) {
    sel_.className = "MouseTd";
  }
  sel_ = r;
  sel_.className = "MouseSelected";
  document.getElementById("content").innerHTML = sel_.innerHTML;
}

function hover(r) {
  if (r != sel_) {
    r.className = "MouseHover";
  }
}

function out(r) {
  if (r != sel_) {
    r.className = "MouseTd";
  }
}
