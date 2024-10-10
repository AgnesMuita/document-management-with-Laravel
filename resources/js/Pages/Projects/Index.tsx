import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import {Projects} from "@/Components/Projects/Project";

export default function index({ projects }: any) {
    return (
        <AuthenticatedLayout
            // user = {auth.user}
            header={
                <div className="flex justify-between items-center">
                    <h2 className="text-xl font-semibold leading-tight text-gray-800">
                        Projects
                    </h2>
                    <Link
                        href={route("project.create")}
                        className="bg-emerald-300 text-white border-4 px-8 border-white"
                    >
                        Add New
                    </Link>
                </div>
            }
        >
            <Head title="Projects" />

            <div className="py-12">
                <div className="mx-auto max-w-[85rem] sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-800">
                            <Projects projects={projects} />
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
