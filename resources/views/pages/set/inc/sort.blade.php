<div class="offset-md-10 col-md-2">
    <select
        onchange="sort_by()"
        id="sort_by_value"
        class="form-select border-0 border-bottom"
        aria-label="Default select example"
    >
        <option selected>OFilter by</option>
        <option value="name_asc">Order by Ascending (A-Z)</option>
        <option value="name_desc">Order by Descending (Z-A)</option>
        <option value="price_asc">Price High to Low</option>
        <option value="price_desc">Price Low to High</option>
        <option value="newest">Newest First</option>
    </select>
</div>
<form id="filter_sort">
    <input type="hidden" id="sort" name="sort" />
</form>
