</header>
<!-- /헤더 영역 -->

<!-- 장바구니 영역 -->
<div class="container padding">
    <div class="sticky-top pt-4 bg-white">
        <span class="text-muted">장바구니</span>
        <div class="title">CART</div>
        <div class="table-head mt-4">
            <div class="cell-50">상품 정보</div>
            <div class="cell-15">가격</div>
            <div class="cell-10">수량</div>
            <div class="cell-15">합계</div>
            <div class="cell-10">+</div>
        </div>
    </div>
    <div id="cart-list">
        <div class="w-100 py-4 text-muted text-center fx-n2">장바구니에 담긴 상품이 없습니다.</div>
    </div>
    <div class="d-between mt-4">
        <div>
            <span class="text-muted">총합계</span>
            <span class="total-price fx-3 text-gold ml-3">0</span>
            <small class="text-muted">원</small>
        </div>
        <button class="button-label" data-target="#buy-modal" data-toggle="modal">구매하기</button>
    </div>
</div>
<!-- /장바구니 영역 -->

<!-- 스토어 영역 -->
<div class="bg-gray">
    <div class="container padding">
        <div class="sticky-top pt-4 bg-gray d-between mb-4 pb-3 align-items-end border-bottom">
            <div>
                <span class="text-muted">인테리어 스토어</span>
                <div class="title">STORE</div>
            </div>
            <div class="d-flex align-items-center">
                <input type="checkbox" id="open-cart" hidden checked>
                <div class="search">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="text" placeholder="검색어를 입력하세요">
                </div>
                <label for="open-cart" class="text-blue ml-4 mr-5">
                    <i class="fa fa-shopping-cart fa-lg"></i>
                </label>
                <div id="drop-area">
                    <div class="text-center text-white">
                        <div class="success position-center">
                            <i class="fa fa-check fa-3x"></i>
                            <p class="mt-4 fx-n2 text-nowrap">상품이 장바구니에 담겼습니다!</p>
                        </div>
                        <div class="error position-center">
                            <i class="fa fa-times fa-3x"></i>
                            <p class="mt-4 fx-n2 text-nowrap">이미 장바구니에 담긴 상품입니다.</p>
                        </div>
                        <div class="normal position-center">
                            <i class="fa fa-shopping-cart fa-3x"></i>
                            <p class="mt-4 fx-n2 text-nowrap">이곳에 상품을 넣어주세요.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="store-list" class="row">
            <div class="w-100 py-4 text-muted text-center fx-n2">일치하는 상품이 없습니다.</div>
        </div>
    </div>
</div>
<!-- /스토어 영역 -->


<!-- 구매하기 -->
<form id="buy-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-4 pt-4 pb-3">
                <div class="title text-center">
                    BUY ITEM
                </div>
                <div class="mt-4">
                    <div class="form-group">
                        <label for="user_name">구매자 이름</label>
                        <input type="text" id="user_name" class="form-control" name="user_name" placeholder="구매자 이름을(를) 입력하세요" required>
                    </div>
                    <div class="form-group">
                        <label for="address">주소</label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="주소을(를) 입력하세요" required>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="w-100 py-3 text-white bg-blue">구매 완료</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="view-modal" class="modal fade">
    <div class="modal-dialog"></div>
    <img alt="구매 내역" class="mw-100 position-center">
</div>
<!-- /구매하기 -->

<script src="/resources/js/Store.js"></script>
<script src="/resources/js/Product.js"></script>