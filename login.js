<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta-et -->
  <!-- CSS dhe titulli -->
</head>
<body>
  <!-- HTML i ekzistues -->
  
  <script>
    function validateForm(event) {
      event.preventDefault(); // Parandalon dërgimin e formës nëse validimi nuk kalon

      // Merr vlerën e fushës së shfrytëzuesit dhe fjalëkalimit
      var username = document.querySelector('input[type="text"]').value;
      var password = document.querySelector('input[type="password"]').value;

      // Kontrollo nëse fushat janë bosh
      if (username.trim() === '' || password.trim() === '') {
        alert('Ju lutem plotësoni të gjitha fushat!');
      } else {
        // Nëse fushat nuk janë bosh, mund të vazhdoni me veprimet e tjera
        // Për shembull, mund të dërgoni formën ose të bëni verifikimin e kredencialeve
        // Këtu mund të shtoni kodin për veprimet që doni të kryhen pas validimit të suksesshëm
        // Për momentin, mund të shtoni një alert ose veprime të tjera sipas nevojës.
        alert('Fushat e plotësuar! Mund të vazhdoni.');
      }
    }

    // Ngjarja për dërgimin e formës
    document.querySelector('form').addEventListener('submit', validateForm);
  </script>
</body>
</html>
