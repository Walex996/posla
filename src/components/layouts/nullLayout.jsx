import React from 'react';
import Header from "components/common/header.jsx";
import Footer from "components/common/footer.jsx";

const NullLayout = (props) => {
    return ( 
        <React.Fragment>
            {/* <Header /> */}
            <div>
                {/* {props.children} */}
            </div>
            {/* <Footer /> */}
        </React.Fragment>
     );
}
 
export default NullLayout;