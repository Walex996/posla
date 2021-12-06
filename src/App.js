import React from 'react';
import { BrowserRouter, Route, Switch, Redirect } from 'react-router-dom';

import GeneralLayout from './components/layouts/generalLayout';
import NullLayout from './components/layouts/nullLayout';
import Error404 from './components/misc/error404';

import HomeDeals from './components/pages/homeDeals';
import HomeProjects from './components/pages/homeProjects';
import CategoryDealsList from './components/pages/CategoryDealsList';
// import CategoryProjectsList from './components/pages/CategoryProjectsList';

import { library } from '@fortawesome/fontawesome-svg-core';
import { fab } from '@fortawesome/free-brands-svg-icons';
// import { far } from '@fortawesome/free-regular-svg-icons';
import { fas } from '@fortawesome/free-solid-svg-icons';
library.add(fas, fab);



const RouteLayout = ({ component: Component, layout: Layout, authUser, authRole, ...rest }) => (
    <Route {...rest} render={(props) => {

        const user = '';
        const user_role = '';

        if (authUser) {
            if (authUser === "loggedIn") {
                if (user.loggedIn === true) {
                    if (authRole) {
                        if (authRole.includes(user_role)) {
                            return <Layout>
                                <Component {...props} />
                            </Layout>
                        }
                        else {
                            // alert("Access denied due to user role");
                            return <Redirect to="/401" />
                        }
                    }
                    else {
                        // no roles required, you only need to be logged in
                        return <Layout>
                            <Component {...props} />
                        </Layout>
                    }
                }
                else {
                    // alert("need to be logged in);
                    return <Redirect to="/login" />
                }
            }
            else if (authUser === "loggedOut") {
                if (user.loggedIn === false) {
                    return <Layout>
                        <Component {...props} />
                    </Layout>
                }
                else {
                    // alert("already logged in; need to be logged out to access);
                    return <Redirect to="/dashboard" />
                }
            }
        }
        else {
            // public page, no auth-yes or auth-no required
            return <Layout>
                <Component {...props} />
            </Layout>
        }
    }} />
)


function App() {
    return (
        <React.Fragment>
            <BrowserRouter>
                <Switch>

                    <RouteLayout exact path="/projects" layout={GeneralLayout} component={HomeProjects} />
                    <RouteLayout exact path="/category/deals/:slug" layout={GeneralLayout} component={CategoryDealsList} />
                    {/* <RouteLayout exact path="/category/projects/:slug" layout={GeneralLayout} component={CategoryProjectsList} /> */}

                    <RouteLayout exact path="/404" layout={NullLayout} component={Error404} />
                    <RouteLayout exact path="/" layout={GeneralLayout} component={HomeDeals} />
                    <Redirect to="/404" />

                </Switch>
            </BrowserRouter>
        </React.Fragment>
    );
}

export default App;