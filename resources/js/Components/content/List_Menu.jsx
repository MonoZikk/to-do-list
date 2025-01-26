import { Link } from "@inertiajs/react"
import { PlusCircle } from "@phosphor-icons/react"


PlusCircle
const List_Menu = () => {
    return (
        <>

            <div className="flex items-center">
                <h1 className="py-6 ps-7 me-2 text-xl font-bold">Your Activity</h1>
                <div className="hover:cursor-pointer hover:scale-105 transition-all">

                    {/* Open Modal */}
                    <PlusCircle size={25} onClick={() => document.getElementById('add_task').showModal()} />


                </div>
            </div>
            {/* Modal View */}
            <dialog id="add_task" className="modal">
                <div className="modal-box">
                    <h3 className="font-bold text-lg">Add Task</h3>
                    <div className="pt-4 grid ">
                        <label for="Activity">Name Activity</label>
                        <input id="Activity" type="text" className="rounded-md py-1.5 text-md" />
                    </div>
                    <div className="pt-4 grid ">
                        <label for="Category">Category</label>
                        <div class="mt-2 grid grid-cols-1">
                            <select id="Category" name="country" autocomplete="country-name" class="hover:cursor-pointer col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 text-md">
                                <option className="text-md">Tasks</option>
                                <option className="text-md">Organization</option>
                                <option className="text-md">Work</option>
                            </select>
                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div className="pt-4 grid ">
                        <label for="Deadline">Deadline</label>
                        <input id="Deadline" type="date" className="rounded-md py-1.5 text-md" />
                    </div>
                    <div className="modal-action">
                        <form method="dialog">
                            {/* if there is a button in form, it will close the modal */}
                            <button className="btn">Close</button>
                        </form>
                        <form method="POST">
                            {/* if there is a button in form, it will close the modal */}
                            <button className="btn btn-primary text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </dialog>

            <div className="px-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <div className="card bg-base-100 shadow-xl mb-6 w-full hover:cursor-pointer hover:shadow-2xl transition-all">
                    <div className="card-body gap-0">
                        <div className="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <div className="card-title text-base sm:text-lg">Project Design 1</div>
                            <div className="rounded-lg text-sm sm:text-center bg-slate-200 px-3 w-fit font-bold">
                                Belum Selesai
                            </div>
                        </div>
                        <div className="text-slate-500">Tugas</div>



                        <div className="card-actions flex-col sm:flex-row items-start sm:items-center justify-between mt-5 gap-2">
                            <p className="text-red-500 font-bold text-sm bg-slate-200 px-3 rounded-lg w-fit">Deadline: 20 Januari 2023</p>
                            {/* <div className="mt-1">
                                <button className="btn btn-sm btn-ghost">Batal</button>
                                <button className="btn btn-sm btn-primary ml-2">Selesai</button>
                            </div> */}
                        </div>
                    </div>
                </div>


            </div>
        </>
    )
}

export default List_Menu