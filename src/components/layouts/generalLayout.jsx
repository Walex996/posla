import React from "react";
import Header from "components/common/header.jsx";
import Footer from "components/common/footer.jsx";

const GeneralLayout = (props) => {
    return (
        <React.Fragment>
            <Header />
            <div className="p-6 sm:p-10">{props.children}</div>
            <Footer />
        </React.Fragment>
    );
};

export default GeneralLayout;
