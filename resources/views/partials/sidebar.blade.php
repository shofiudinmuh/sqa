<div>
  <div class="sidebar p-4 bg-primary" id="sidebar">
    <h4 class="mb-5 text-white">Kelompok 1</h4>
    <li>
      <a class="text-white" href="#">
        <i class="bi bi-house mr-2"></i>
        Dashboard
      </a>
    </li>
    <li>
      <a class="text-white" href="#">
        <i class="bi bi-fire mr-2"></i>
        Profil
      </a>
    </li>
    <li>
      <a class="text-white" href="#">
        <i class="bi bi-newspaper mr-2"></i>
        Hapus Akun
      </a>
    </li>
    <li>
      <a class="text-white" href="#">
        <i class="bi bi-bicycle mr-2"></i>
        Logout
      </a>
    </li>
  </div>
</div>
<section class="p-4" id="main-content">
  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>
</section>
<script>
  // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");
    });
</script>