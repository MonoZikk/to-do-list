import { PlusCircle } from "@phosphor-icons/react"

PlusCircle
const List_Menu = () => {
    return (
        <>
            <div className="flex items-center">
                <h1 className="py-6 ps-7 me-2 text-xl font-bold">Your Activity</h1>
                <div className="hover:cursor-pointer hover:scale-105 transition-all">

                    <PlusCircle size={25} />
                </div>
            </div>


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