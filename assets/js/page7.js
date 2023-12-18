function previewProfilePic(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('profile-pic-preview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }

function uploadForm() {
	// Récupérez le formulaire par son ID
	var form = document.getElementById('profile-form');

	// Soumettez le formulaire automatiquement
	form.submit();
}
