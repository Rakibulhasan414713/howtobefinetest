(function () {
  function projectRootPath() {
    var p = window.location.pathname || "";
    var i = p.indexOf("/app/");
    if (i !== -1) return p.slice(0, i);
    i = p.indexOf("/public/");
    if (i !== -1) return p.slice(0, i);
    // fallback: assume public is sibling of current directory
    return "";
  }

  function buildUrl(rel) {
    var root = projectRootPath();
    return root + rel;
  }

  function bindForm(formId, ajaxPath, errorSelector) {
    var form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener("submit", function (e) {
      // keep fallback if fetch not available
      if (!window.fetch) return;

      e.preventDefault();

      var fd = new FormData(form);
      // Keep existing "login"/"submit" button names if they exist
      var actionUrl = buildUrl(ajaxPath);

      fetch(actionUrl, { method: "POST", body: fd, credentials: "same-origin" })
        .then(function (r) { return r.json(); })
        .then(function (d) {
          if (d && d.ok) {
            window.location.href = d.redirect || window.location.href;
            return;
          }
          var msg = (d && d.message) ? d.message : "Request failed";
          if (errorSelector) {
            var el = document.querySelector(errorSelector);
            if (el) { el.textContent = msg; el.style.display = "block"; return; }
          }
          alert(msg);
        })
        .catch(function () {
          alert("Network error");
        });
    });
  }

  // User login (userlogin.php)
  bindForm("userLoginForm", "/public/ajax/user_login.php", "#ajaxErrorUserLogin");

  // Admin login (adminindex.php)
  bindForm("adminLoginForm", "/public/ajax/admin_login.php", "#ajaxErrorAdminLogin");

  // User signup (usersignup.php)
  bindForm("userSignupForm", "/public/ajax/user_signup.php", "#ajaxErrorUserSignup");
})();