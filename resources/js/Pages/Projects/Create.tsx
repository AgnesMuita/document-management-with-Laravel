import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout"
import { Head, Link } from "@inertiajs/react";

export default function ProjectCreate(){
  return (
    <AuthenticatedLayout
       header={
            <div className="flex justify-between items-center">
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Create New Project
                </h2>
            </div>
            }
    >


    </AuthenticatedLayout>

  )

}