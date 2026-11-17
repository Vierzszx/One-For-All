(function () {
  var KEY = "satutitik-theme";
  var root = document.documentElement;
  var themeToggle = document.querySelector(".theme-toggle");
  var themeMeta = document.querySelector('meta[name="theme-color"]');

  // ---------- Mode terang / gelap ----------
  function syncThemeUi(theme) {
    var dark = theme === "dark";
    themeToggle.setAttribute("aria-pressed", String(dark));
    themeToggle.setAttribute("aria-label", dark ? "Ganti ke mode terang" : "Ganti ke mode gelap");
    if (themeMeta) themeMeta.setAttribute("content", dark ? "#1f1f1f" : "#ffffff");
  }

  syncThemeUi(root.getAttribute("data-theme") || "light");

  themeToggle.addEventListener("click", function () {
    var next = root.getAttribute("data-theme") === "dark" ? "light" : "dark";
    root.setAttribute("data-theme", next);
    try { localStorage.setItem(KEY, next); } catch (e) {}
    syncThemeUi(next);
  });

  // ---------- Form login ----------
  document.querySelectorAll(".login-form").forEach(function (form) {
    var password = form.querySelector("#password");
    var toggle = form.querySelector(".password-toggle");
    var status = form.querySelector(".form-status");

    toggle.addEventListener("click", function () {
      var showing = password.type === "text";
      password.type = showing ? "password" : "text";
      toggle.setAttribute("aria-pressed", String(!showing));
      toggle.setAttribute("aria-label", showing ? "Tampilkan kata sandi" : "Sembunyikan kata sandi");
    });

    // Validasi field wajib di browser, lalu kirim ke Laravel
    form.addEventListener("submit", function (event) {
      if (!form.reportValidity()) {
        event.preventDefault();
        return;
      }
      status.textContent = "";
      form.querySelector(".submit-button").disabled = true;
    });
  });
})();
