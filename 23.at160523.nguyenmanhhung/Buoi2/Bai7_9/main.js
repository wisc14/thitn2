function toggleFolder(span) {
    var ul = span.parentElement.querySelector('ul');
    if (ul) {
      var isCollapsed = ul.style.display !== 'none';
      ul.style.display = isCollapsed ? 'none' : 'block';
      span.innerText = isCollapsed ? '▶' : '▼';
    }
  }