import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { Dashboard } from "@/Components/Dashboard";


export default function dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-3xl sm:px-3 lg:px-4">
                    {/* <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg"> */}
                        <div className="text-gray-900">
                            <Dashboard/>
                        </div>
                    {/* </div> */}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
