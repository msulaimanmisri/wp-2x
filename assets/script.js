$(document).ready(function () {
  // For searching
  var searchInput = document.getElementById('search');
  var expertCols = document.querySelectorAll('.expert-col');

  searchInput.addEventListener('input', () => {
    var searchValue = this.value;
    expertCols.forEach(function (expertCol) {
      var expertName = expertCol.dataset.name;
      if (expertName.indexOf(searchValue) === -1) {
        expertCol.style.display = 'none';
      } else {
        expertCol.style.display = 'block';
      }
    });
  })

  // Back Button
  $('#actAsBackButton').click(function () {
    window.location.href = '/';
  })
});
