@extends('layouts.app')

@section('titulo')
    Crear Post
@endsection




@section('contenido')
    <div class="flex items-center justify-center p-12">
  
      <div class="mx-auto w-full max-w-[550px] bg-white">
        <form
          class="py-6 px-9"
          action="{{route('post.create')}}"
          method="POST" enctype="multipart/form-data"
        >
        @csrf
          <div class="mb-5">
            <label
              for="title"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Titulo de la publicacion:
            </label>
            <input
              type="text"
              name="title"
              id="title"
              placeholder="Titulo insano..."
              value="{{old('title')}}"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <label
              for="description"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Descripcion:
            </label>
            <textarea
              name="description"
              id="description"
              placeholder="Descripcion insana..."
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            >{{old('description')}}</textarea>

          <div class="mb-6 pt-4">
            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
              Subir imagen del post:
            </label>

            <div class="mb-8" id="fileBlock">
              <input type="file" name="imagepost" id="imagepost" class="sr-only" />
              <label
                for="imagepost"
                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center cursor-pointer"
              >
                <div>
                  <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                    Drop files here
                  </span>
                  <span class="mb-2 block text-base font-medium text-[#6B7280]">
                    Or
                  </span>
                  <span
                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                  >
                    Browse
                  </span>
                </div>
              </label>
              
            </div>
            <div id="fileItem" class="hidden">
              <div class="mt-2 text-base text-[#07074D] line-clamp-1 gap-5 items-center bg-slate-200/70 p-2
              rounded flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <div class="flex justify-between w-full items-center">
                        <p id="fileName" class=" line-clamp-1"></p>
                        <svg id="deleteIcon" class="cursor-pointer w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </div>
              </div>
            </div>
            </div>
            

          <div>
            <button
              class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
            >
              Send File
            </button>
          </div>
        </form>
      </div>
    </div>
    @vite('resources/js/fileInputCustom.js');
@endsection

