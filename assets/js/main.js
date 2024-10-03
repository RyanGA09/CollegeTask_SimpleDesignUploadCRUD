document.addEventListener("DOMContentLoaded", () => {
  // Validasi Form
  const form = document.getElementById("formUpload");
  form.addEventListener("submit", (e) => {
    const nama = form.querySelector('input[name="nama"]').value;
    const email = form.querySelector('textarea[name="email"]').value;
    const jnsKelamin = form.querySelector('select[name="jnskelamin"]').value;

    if (!nama || !email || !jnsKelamin) {
      e.preventDefault();
      alert("Semua field harus diisi!");
    }
  });

  // Konfirmasi Delete
  document.querySelectorAll(".delete-link").forEach((link) => {
    link.addEventListener("click", (e) => {
      if (!confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        e.preventDefault();
      }
    });
  });

  // Ajax submission can be implemented here if necessary.
});
