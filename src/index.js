import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

import 'assets/css/index.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'assets/css/all-font-awesome.min.css';

// deletable
import 'assets/css/toastr.css';
// import 'assets/css/layout-fx-header-1.css';
// import 'assets/css/layout-fx-header-2.min.css';
import 'assets/css/layout-fx-main-1.css';
// import 'assets/css/layout-fx-main-2.css';
import 'assets/css/layout-fx-custom.css';


// necessary
// import 'assets/css/posla.css';
// import 'assets/css/default.css';
import 'assets/css/posla-layout.css';
import 'assets/css/posla-front.css';
import 'assets/css/posla-auth-in.css';
import 'assets/css/posla-misc.css';
import 'assets/css/posla-others.css';


ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
  document.getElementById('root')
);