import { Link } from "@inertiajs/react"
import { Bell, CalendarBlank, List } from "@phosphor-icons/react"

const Navbar = () => {
    return (
        <div className="navbar bg-base-100 shadow">
            <label htmlFor="my-drawer-3" className="btn-sm p-0 ps-3 btn-ghost drawer-button lg:hidden">
                <List size={25} />
            </label>
            <div className="flex-1">
                <a className="btn btn-ghost text-xl">Welcome, Mono👋</a>
            </div>
            <div className="flex-none">
                <div className="dropdown dropdown-end">
                    <Link href="#" role="button" className="btn btn-ghost btn-circle">
                        <div className="indicator">
                            <Bell size={25} />
                        </div>
                    </Link>
                    <Link href="#" role="button" className="btn btn-ghost btn-circle">
                        <div className="indicator">
                            <CalendarBlank size={25} />
                        </div>
                    </Link>
                </div>
                <div className="dropdown dropdown-end">
                    <div tabIndex={0} role="button" className="btn btn-ghost btn-circle avatar">
                        <div className="w-10 rounded-full">
                            <img
                                alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul
                        tabIndex={0}
                        className="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li>
                            <a className="justify-between">
                                Profile
                                <span className="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    )
}

export default Navbar