</div>
</div>

<footer class="footer mt-auto py-3 bg-light border-top shadow-sm fixed-bottom">
    <div class="container text-center">
        <p class="mb-1 text-muted small">
            &copy; <?= date('Y'); ?> <strong>CRUD UTS Web 2</strong> —
            Created by : 
            <span class="fw-semibold">Alan-Azza-Fathur</span>.
        </p>
    </div>
</footer>


<!-- jQuery & DataTables JS (harus sebelum Bootstrap Bundle) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            pageLength: 5, // jumlah baris per halaman
            lengthMenu: [5],
            order: [
                [0, 'asc']
            ] // urutkan berdasarkan kolom pertama (ID)
        });
    });
</script>

</body>

</html>