import React, { Component } from "react";
import { Link } from "react-router-dom";
import errorIcon from "assets/images/icons/error.svg";

class Error404 extends Component {
    state = {};
    render() {
        return (
            <div className="w-screen h-screen flex overflow-hidden">
                <div className="m-auto px-8 text-center max-w-md">
                    
                    <div className="h-48 sm:h-56">
                        <img src={errorIcon} alt="EarniPay" className="h-full object-contain mx-auto" />
                    </div>
                    <div className="mt-8 font-boing font-semibold text-2xl sm:text-3xl">
                        404 Error
                    </div>
                    <div className="mt-4 text-gray-500">
                        Oops! It seems like the page you are looking for is not available! Please try again with another page or go back to home.
                    </div>

                    <Link to="/" className="btn btn-block btn-lg btn-posla-red mt-8 w-full animate hover:scale-110">
                        Goto Home
                    </Link>

                </div>
            </div>
        );
    }
}

export default Error404;
