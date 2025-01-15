
import Navbar from "./content/Navbar";
import List_Menu from "./content/List_Menu";


const Sidebar = () => {
    return (
        <>
            <div className="drawer lg:drawer-open">
            <input id="my-drawer-3" type="checkbox" className="drawer-toggle" />
            <div className="drawer-content">
                {/* Page content here */}
                
                <Navbar></Navbar>
                <List_Menu></List_Menu>
                
            </div>
            <div className="drawer-side">
                <label htmlFor="my-drawer-3" aria-label="close sidebar" className="drawer-overlay"></label>
                <ul className="menu bg-base-200 text-base-content min-h-full lg:w-60 w-30 p-4">
                    {/* Sidebar content here */}
                    <li className="pointer-events-none mb-4">
                        <h1 className="text-3xl font-bold">Project</h1>
                    </li>
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>
                </ul>
            </div>
        </div>
        </>
    )
}

export default Sidebar