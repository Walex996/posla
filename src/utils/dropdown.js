import { Menu } from "@headlessui/react";

const Dropdown = (props) => {
    // console.log(props);

    return (
        <Menu as="div">
            <div className={"relative group inline-block " + props.className}>

                <Menu.Button as="div" className="cursor-pointer">
                    {props.children[0]}
                </Menu.Button>

                <Menu.Items as="div" className="dropdown-content">
                    {props.children[1]}
                </Menu.Items>

            </div>
        </Menu>
    );
};

export default Dropdown;