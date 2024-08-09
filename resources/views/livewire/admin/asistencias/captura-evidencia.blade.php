<!-- resources/views/livewire/captura-evidencia.blade.php -->

<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Botón para abrir el modal -->
    <button type="button" onclick="openModal()">Abrir Cámara</button>

    <!-- Modal -->
    <div id="cameraModal" style="display: none;">
        <div>
            <h2>Captura de Evidencia</h2>
            <button type="button" onclick="closeModal()">Cerrar</button>
        </div>

        <!-- Previsualización de la cámara -->
        <div>
            <video id="video" width="100%" autoplay></video>
        </div>

        <!-- Botón para capturar la imagen -->
        <button type="button" onclick="captureImage()">Capturar</button>

        <!-- Previsualización de la imagen capturada -->
        <div>
            <canvas id="canvas" style="display: none;"></canvas>
            <img id="capturedImage" style="display: none;">
        </div>

        <!-- Formulario para subir la imagen -->
        <form wire:submit.prevent="save">
            <input type="hidden" wire:model="image" id="imageData">
            <button type="submit">Subir Evidencia</button>
        </form>
    </div>

    <script>
        let video = document.getElementById('video');
        let canvas = document.getElementById('canvas');
        let capturedImage = document.getElementById('capturedImage');
        let imageData = document.getElementById('imageData');

        function openModal() {
            document.getElementById('cameraModal').style.display = 'block';

            navigator.mediaDevices.getUserMedia({ video: true })
                .then(stream => {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(err => {
                    console.error("Error accessing camera: " + err);
                });
        }

        function closeModal() {
            document.getElementById('cameraModal').style.display = 'none';
            let stream = video.srcObject;
            let tracks = stream.getTracks();

            tracks.forEach(track => track.stop());

            video.srcObject = null;
        }

        function captureImage() {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

            let dataUrl = canvas.toDataURL('image/png');
            capturedImage.src = dataUrl;
            capturedImage.style.display = 'block';
            imageData.value = dataUrl;
        }
    </script>
</div>
