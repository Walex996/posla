/*
import { Menu } from "@headlessui/react";
import { Link } from "react-router-dom";

const Dropdown = (props) => {
    // console.log(props.menu);

    return (
        <Menu>
            <div className={"group inline-block " + props.classes}>
                <Menu.Button>
                    {props.icon}
                </Menu.Button>

                <Menu.Items className="dropdown">
                    {props.menu.map((m, index) => (
                        (m &&
                            <Menu.Item key={index}>
                                <>
                                    {(m.type === "link") &&
                                        <Link to={m.link} className="dropdown-item">{m.text}</Link>
                                    }

                                    {(m.type === "div") &&
                                        <div onClick={m.click} className="dropdown-item">{m.text}</div>
                                    }
                                </>
                            </Menu.Item>
                        )
                    ))}
                </Menu.Items>
            </div>
        </Menu>
    );
};

export default Dropdown;
*/





import { useState } from 'react'
import { Dialog } from '@headlessui/react'

const Modal = (props) => {
    let [isOpen, setIsOpen] = useState(true)

    return (
        <Dialog open={isOpen} onClose={() => setIsOpen(false)} className="fixed z-10 inset-0 overflow-y-auto">
            <div className="flex items-center justify-center min-h-screen">
                <Dialog.Overlay className="fixed inset-0 bg-black opacity-30" />

                <div className="w-full max-w-lg mx-auto relative bg-white rounded overflow-hidden">
                    <div>
                        {props.children}
                    </div>
                    {/*
                        <Dialog.Title>
                            title here
                        </Dialog.Title>
                        <Dialog.Description>
                            description here
                        </Dialog.Description>
                    */}

                    <button onClick={() => setIsOpen(false)}>Assign</button>
                    <button onClick={() => setIsOpen(false)}>Cancel</button>
                </div>

            </div>
        </Dialog>
    )
}

export default Modal;