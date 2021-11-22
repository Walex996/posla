import { Menu } from "@headlessui/react";
import { Link } from "react-router-dom";
import { ReactComponent as IconNav } from "assets/images/icons/Navicon-v.svg";

const Dropdown = (props) => {
    // console.log(props.menu);

    return (
        <Menu>
            <div className={"group inline-block " + props.classes}>
                <Menu.Button>
                    {props.icon}

                    {(!props.icon) &&
                        <IconNav className="w-8 h-8 p-1.5 relative top-1 cursor-pointer group-hover:bg-gray-200 rounded" />
                    }
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




/*
const dropdownTableIcon = <IconNav className="w-8 h-8 p-1.5 relative cursor-pointer hover:bg-gray-200 rounded" />;

const dropdownTableMenu = [
    {
        text: "text1",
        link: "https://link1.org",
    },
    {
        text: "text2",
        link: "https://link2.org",
    },
    {
        text: "text3",
        link: "https://link3.org",
    },
];
*/


/*
<Dropdown icon={dropdownTableIcon} menu={dropdownTableMenu} />
<Dropdown icon={dropdownTableIcon} menu={[{type: "link", text: "text1", link: "http://link1.com"},{text:"text2",link:"http://link2.com"}]} />
*/