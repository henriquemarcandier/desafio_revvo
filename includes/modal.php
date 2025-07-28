<?php
/**
 * Modal Component
 * 
 * Displays a welcome modal only on the user's first visit
 * Uses cookies to track if the user has seen the modal before
 */

// Check if the 'modal_seen' cookie exists
$modalSeen = isset($_COOKIE['revvo_modal_seen']);

// If this is the first visit (cookie not set)
if (!$modalSeen) {
    // Set cookie to expire in 30 days
    setcookie('revvo_modal_seen', '1', time() + (86400 * 30), "/");
?>
    <div id="welcomeModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 transition-opacity duration-300 ease-in-out">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4 transform transition-all duration-300 ease-in-out">
            <!-- Modal Header -->
            <div class="bg-blue-600 px-6 py-4 rounded-t-lg">
                <h3 class="text-xl font-bold text-white">Bem-vindo ao LEO!</h3>
            </div>
            
            <!-- Modal Body -->
            <div class="p-6">
                <p class="text-gray-700 mb-4">
                    Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.
                </p>
                <p class="text-gray-700">
                    Explore nossos cursos e comece sua jornada de aprendizado hoje mesmo!
                </p>
            </div>
            
            <!-- Modal Footer -->
            <div class="bg-gray-50 px-6 py-4 rounded-b-lg flex justify-end">
                <button 
                    id="closeModalBtn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-200"
                >
                    Entendi
                </button>
            </div>
        </div>
    </div>

    <script>
        // Close modal function
        function closeModal() {
            const modal = document.getElementById('welcomeModal');
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300); // Match the duration of the transition
        }

        // Add event listener to close button
        document.getElementById('closeModalBtn').addEventListener('click', closeModal);

        // Close modal when clicking outside
        document.getElementById('welcomeModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
<?php } ?>