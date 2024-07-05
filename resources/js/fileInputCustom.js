document.addEventListener('DOMContentLoaded', function() {
        
    //Item de [archivo] cargado
    const fileItemElement=document.getElementById('fileItem')
    //Nombre del archivo cargado
    const fileNameElement=document.getElementById('fileName');
    //Input type=file
    const fileSlotElement=document.getElementById('imagepost');
    //Zona de [arrestre] input de file
    const fileBlockElement=document.getElementById('fileBlock');
    //Icono de " x " en el archivo cargado
    const deleteIconElement=document.getElementById('deleteIcon');

    fileBlockElement.addEventListener('dragover',(event)=>{
        event.preventDefault();
        fileBlockElement.classList.add('border');
        fileBlockElement.classList.add('border-purple-300');
    })
    fileBlockElement.addEventListener('dragleave',(event)=>{
        event.preventDefault();
        fileBlockElement.classList.remove('border');
        fileBlockElement.classList.remove('border-purple-300');
    });
    
    fileSlotElement.addEventListener('change',(event)=>{
        event.preventDefault();
        fileNameElement.textContent=fileSlotElement.files[0].name;
        fileBlockElement.classList.add('hidden');
        fileItemElement.classList.remove('hidden');
    })


    fileBlockElement.addEventListener('drop',(event)=>{
        event.preventDefault()
        if(event.dataTransfer.files.length){
            fileSlotElement.files=event.dataTransfer.files;
            fileNameElement.textContent=event.dataTransfer.files[0].name;
            fileBlockElement.classList.add('hidden');
            fileItemElement.classList.remove('hidden');

            fileBlockElement.classList.remove('border');
            fileBlockElement.classList.remove('border-purple-300');
        }
        
    })

    deleteIconElement.addEventListener('click',()=>{
        fileSlotElement.files=null;
        fileBlockElement.classList.remove('hidden');
        fileItemElement.classList.add('hidden');
    })
    
});