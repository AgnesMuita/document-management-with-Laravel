import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TextInput from '@/Components/TextInput';
import { Tabs, TabsList, TabsContent, TabsTrigger} from '@/Components/ui/tabs';
import {Receipts} from '@/Components/Documents/Receipts';
import { AllDocs } from '@/Components/Documents/AllDocs';
import FileUpload from "@/Components/Documents/FileUpload";

export default function documents({documents}:any) {
    console.log(documents)
    return (
        <AuthenticatedLayout
            // user = {auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Documents
                </h2>
            }
        >
            <Head title="Documents" />

            <div className="py-2">
                {/* <div className="mx-auto max-w-7xl sm:px-6 lg:px-8 p-5">
                    <TextInput
                        className="w-[50rem]"
                        placeholder="Search for documents"
                    />
                </div> */}
                <div className="w-[90rem] px-[20rem] pb-[2rem]">
                    <FileUpload/>
                </div>
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8 flex items-start gap-x-[7rem] p-[2rem] overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <Tabs defaultValue="alldocuments" className="w-[800px]">
                        <TabsList>
                            <TabsTrigger value="alldocuments">
                                All Documents
                            </TabsTrigger>
                            <TabsTrigger value="receipts">Receipts</TabsTrigger>
                        </TabsList>
                        <TabsContent value="alldocuments">
                                <AllDocs documents={documents} />
                        </TabsContent>
                        <TabsContent value="receipts">
                            <Receipts />
                        </TabsContent>
                    </Tabs>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
