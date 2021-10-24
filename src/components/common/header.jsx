import React, { Component } from "react";
// import logo from "assets/images/icons/logo.jpg";
import { NavLink } from "react-router-dom";
import { Menu } from "@headlessui/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

class Header extends Component {
    state = {};

    render() {
        return (
            <div className="bg-black">
                <div className="container h-14 md:h-20 mx-auto flex">
                    <div className="w-full px-4 my-auto hidden md:flex text-white">

                        <div className="flex-shrink-0 my-auto">
                            <NavLink to="/" className="text-xl md:text-2xl font-medium py-2 hover:text-polaroid-yellow">
                                Project
                            </NavLink>
                        </div>

                        <div className="flex-grow flex uppercase" style={{"fontSize":"13px"}}>
                            <div className="flex flex-grow h-full">
                                <div className="flex m-auto space-x-10">
                                    <NavLink to="" className="header-links">
                                        Link 1
                                    </NavLink>
                                    <NavLink to="" className="header-links">
                                        Link 2
                                    </NavLink>
                                    <NavLink to="" className="header-links">
                                        Link 3
                                    </NavLink>
                                    <NavLink to="" className="header-links">
                                        Link 4
                                    </NavLink>
                                </div>
                            </div>
                            <div className="flex-shrink-0 h-full">
                                <div className="flex my-auto space-x-10">
                                    <NavLink to="" className="my-auto header-links">
                                        Link 5
                                    </NavLink>
                                    <NavLink to="" className="btn btn-transparent-yellow hover:text-black hover:bg-polaroid-yellow">
                                        Link 6
                                    </NavLink>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div className="w-full h-14 px-4 my-auto fixed flex md:hidden bg-black text-white">
                    
                        <div className="flex-shrink-0 my-auto">
                            <NavLink to="/" className="text-xl md:text-2xl font-medium py-2 hover:text-polaroid-yellow">
                                Project
                            </NavLink>
                        </div>

                        <Menu>
                            <div className="w-full flex justify-end">
                                <Menu.Button as="button" className="w-10 h-10 my-auto text-white group hover:bg-white flex rounded cursor-pointer">
                                    <FontAwesomeIcon icon="bars" className="text-xl m-auto group-hover:text-black" />
                                </Menu.Button>
                            </div>
                            <Menu.Items>
                                <Menu.Item>
                                    <div className="absolute min-h-screen z-40 top-14 inset-x-0 bg-black text-white bg-opacity-90">
                                        <div className="h-screen py-20 overflow-auto overscroll-contain">
                                            <div className="space-y-10 pb-14 text-center">
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.1
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                                <div>
                                                    <NavLink to="" className="header-links-mobile">
                                                        Link 1.2
                                                    </NavLink>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Menu.Item>
                            </Menu.Items>
                        </Menu>

                    </div>
                </div>
            </div>
        );
    }
}

export default Header;
