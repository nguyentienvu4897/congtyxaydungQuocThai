// Polyfills for js features used in the Dashboard but not supported in some browsers (mainly IE)
import './polyfills';
// A plugin file where you could register global components used across the app
import GlobalComponents from './globalComponents';
// A plugin file where you could register global directives
import GlobalDirectives from './globalDirectives';
// Sidebar on the right. Used as a local plugin in DashboardLayout.vue
import SideBar from './components/SidebarPlugin';
// Tabs plugin. Used on Panels page.

// element ui language configuration
import lang from 'element-ui/lib/locale/lang/en';
import locale from 'element-ui/lib/locale';
locale.use(lang);

// asset imports
import 'bootstrap/scss/bootstrap.scss';
import './assets/sass/now-ui-dashboard.scss';
import './assets/css/demo.css';

// library auto imports
import 'es6-promise/auto';

export default {
  install(Vue) {
    Vue.use(GlobalComponents);
    Vue.use(GlobalDirectives);
    Vue.use(SideBar);
  }
};
