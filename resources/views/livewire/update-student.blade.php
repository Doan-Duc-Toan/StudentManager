<div class=" w-4/5 mt-20 mx-auto">
    <form wire:submit.prevent='update'>
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Student Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use this form to create a new student.
                    </p>
                </div>

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input wire:model='name' type="text" id="name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                        @error('name')
                            <span class=" text-red-500 text-sm ">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email
                            Address</label>
                        <input wire:model='email' type="text" id="email" autocomplete="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                        @error('email')
                            <span class=" text-red-500 text-sm ">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image" wire:model='new_image'
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                        @error('image')
                            <span class=" text-red-500 text-sm ">{{ $message }}</span>
                        @enderror
                        <img class=" h-32 w-auto mt-3" src="{{ asset('storage/' . $image) }}" alt="">
                        @if ($new_image)
                            <span class=" text-gray-500 inline-block border rounded p-1">New Image</span>
                            <img class=" h-32 w-auto mt-3" src="{{ $new_image->temporaryUrl() }}">
                        @endif
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="class_id" class="block text-sm font-medium text-gray-700">Class</label>
                        <select id="class_id" wire:model.live='class'
                            class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Select a Class</option>
                            @foreach ($classes as $xclass)
                                <option value="{{ $xclass->id }}">{{ $xclass->name }}</option>
                            @endforeach
                        </select>
                        @error('class')
                            <span class=" text-red-500 text-sm ">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="section_id" class="block text-sm font-medium text-gray-700">Section</label>
                        <select id="section_id" wire:model.live='section'
                            class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Select a Section</option>
                            @if ($sections)
                                @foreach ($sections as $xsection)
                                    <option value="{{ $xsection->id }}">{{ $xsection->name }}</option>
                                @endforeach
                            @else
                                <option value="">Plese select one a class</option>
                            @endif
                        </select>
                        @error('section')
                            <span class=" text-red-500 text-sm ">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a href="{{url('/')}}" as="button" wire:navigate
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
