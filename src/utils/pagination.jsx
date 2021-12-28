import React from "react";
import queryString from 'query-string';
// import ReactTooltip from 'react-tooltip';
import { Menu } from "@headlessui/react";
import { Link } from "react-router-dom";
import { customizeSVG } from 'utils/customizeSVG.jsx';
// import { ReactComponent as IconChevronLeft } from "assets/images/icons/project-icons/chevron-left.svg";
// import { ReactComponent as IconChevronRight } from "assets/images/icons/project-icons/chevron-right.svg";
// import { ReactComponent as AngleDown } from "assets/images/icons/project-icons/angle-down.svg";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

const Pagination = (props) => {

    customizeSVG();

    const qs = queryString.parse(props.url);
    delete qs['page'];
    // console.log("qs", qs);
    let qsToUrl = new URLSearchParams(qs).toString();
    qsToUrl = "?" + ((qsToUrl !== "")? qsToUrl + "&" : "");
    // console.log("qsToUrl", qsToUrl);

    const {data, limit: dataPerPage} = props;
    // console.log("data",data);
    // const startIndex = ((data.page-1) * data.limit) + 1;
    // const lastIndex = ((data.page * data.limit) <= data.totalDocs)? (data.page * data.limit) : data.totalDocs;

    return (

        <>
            {/* <ReactTooltip /> */}

            <div className="py-1.5 text-sm flex">

                <div className="w-full sm:w-1/2 my-auto">
                    <div className="">
                        <div className="pagination">

                            {(data.hasPrevPage) && 
                                <Link to={qsToUrl + "page=" + data.prevPage} className="pagination-items border">
                                    <FontAwesomeIcon icon="chevron-right" className="pagination-items-icon" />
                                    <div>
                                        Prev
                                    </div>
                                </Link>
                            }

                            {(!data.hasPrevPage) && 
                                <div className="pagination-items border disabled opacity-50">
                                    <FontAwesomeIcon icon="chevron-left" className="pagination-items-icon" />
                                    <div>
                                        Prev
                                    </div>
                                </div>
                            }


                            
                            {((data.page !== 1) && (data.page - 3) >= 1) &&
                                <Link to={qsToUrl + "page=1"} className="pagination-items">
                                    <div>
                                        1
                                    </div>
                                </Link>
                            }

                            {((data.page - 3) > 1) &&
                                <div className="pagination-items-null">
                                    <div>
                                        ...
                                    </div>
                                </div>
                            }
                            
                            {((data.page - 2) >= 1) &&
                                <Link to={qsToUrl + "page=" + (data.page - 2)} className="pagination-items">
                                    <div>
                                        {data.page - 2}
                                    </div>
                                </Link>
                            }
                            
                            {((data.page - 1) >= 1) &&
                                <Link to={qsToUrl + "page=" + (data.page - 1)} className="pagination-items">
                                    <div>
                                        {data.page - 1}
                                    </div>
                                </Link>
                            }
                            


                            <Link to={qsToUrl + "page=" + data.page} className="pagination-items pagination-items-active">
                                <div>
                                    {data.page}
                                </div>
                            </Link>



                            {((data.page + 1) <= (data.totalPages)) &&
                                <Link to={qsToUrl + "page=" + (data.page + 1)} className="pagination-items">
                                    <div>
                                        {data.page + 1}
                                    </div>
                                </Link>
                            }

                            {((data.page + 2) <= (data.totalPages)) &&
                                <Link to={qsToUrl + "page=" + (data.page + 2)} className="pagination-items">
                                    <div>
                                        {data.page + 2}
                                    </div>
                                </Link>
                            }

                            {((data.page + 3) < (data.totalPages)) &&
                                <div className="pagination-items-null">
                                    <div>
                                        ...
                                    </div>
                                </div>
                            }
                            
                            {((data.page !== (data.totalPages)) && (data.page + 2) < (data.totalPages)) &&
                                <Link to={qsToUrl + "page=" + (data.totalPages)} className="pagination-items">
                                    <div>
                                        {data.totalPages}
                                    </div>
                                </Link>
                            }


                            {(data.hasNextPage) && 
                                <Link to={qsToUrl + "page=" + data.nextPage} className="pagination-items border">
                                    <div>
                                        Next
                                    </div>
                                    <FontAwesomeIcon icon="chevron-left" className="pagination-items-icon" />
                                </Link>
                            }

                            {(!data.hasNextPage) && 
                                <div className="pagination-items border disabled opacity-50">
                                    <div>
                                        Next
                                    </div>
                                    <FontAwesomeIcon icon="chevron-right" className="pagination-items-icon" />
                                </div>
                            }

                            
                        </div>
                    </div>
                </div>

                <div className="w-full sm:w-1/2 hidden sm:block my-auto">
                    <div className="float-right">
                        <Menu as="div">
                            <div className="group inline-block">
                                <Menu.Button as="div">
                                    <button type="button" className="btn btn-md border btn-gray-hover">
                                        {dataPerPage} per page
                                        <FontAwesomeIcon icon="angle-down" className="ml-2" />
                                    </button>
                                </Menu.Button>
                                <Menu.Items as="div" className="dropdown">
                                    <Menu.Item as="div">
                                        <div>
                                            <Link to="?limit=10" className="dropdown-item hidden">
                                                10 per page
                                            </Link>
                                            <Link to="?limit=20" className="dropdown-item">
                                                20 per page
                                            </Link>
                                            <Link to="?limit=30" className="dropdown-item">
                                                30 per page
                                            </Link>
                                            <Link to="?limit=40" className="dropdown-item">
                                                40 per page
                                            </Link>
                                            <Link to="?limit=50" className="dropdown-item">
                                                50 per page
                                            </Link>
                                        </div>
                                    </Menu.Item>
                                </Menu.Items>
                            </div>
                        </Menu>
                    </div>
                </div>

            </div>
        </>
    );
};

export default Pagination;
