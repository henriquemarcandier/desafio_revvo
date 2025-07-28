        </div> <!-- Fecha div flex-1 -->
    </div> <!-- Fecha div flex -->

    <script>
        // Mostrar mensagens de sucesso/erro
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            
            if (urlParams.has('success')) {
                alert('Operação realizada com sucesso!');
                window.history.replaceState({}, document.title, window.location.pathname);
            }
            
            if (urlParams.has('error')) {
                alert('Ocorreu um erro. Por favor, tente novamente.');
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        });
    </script>
</body>
</html>