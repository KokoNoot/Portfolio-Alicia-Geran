'use strict';

window.onload = () => {
  // Active elements on sidebar
  switch (window.location.pathname) {
    case '/admin' :
      document.querySelector('a.nav-link[href="/admin"]').classList.add('active');
      break;
    case '/admin/experiences.php' :
      document.querySelector('a.nav-link[href="/admin/experiences.php"]').classList.add('active');
      break;
    case '/admin/projects.php' :
      document.querySelector('a.nav-link[href="/admin/projects.php"]').classList.add('active');
      break;
    case '/admin/settings.php' :
      document.querySelector('a.nav-link[href="/admin/settings.php"]').classList.add('active');
      break;
  }
};
