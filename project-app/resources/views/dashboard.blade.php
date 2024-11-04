<x-app-layout>
    <div class="min-h-screen bg-gray-100 py-6 flex justify-center">
        <div class="w-full max-w-7xl px-6 lg:px-8 grid grid-cols-12 gap-4">

            <!-- Sidebar Menu and Orders -->
            <div class="max-h-[695px] col-span-2 flex flex-col h-full relative">
                <!-- Menu and Orders Buttons -->
                <div class="flex-grow">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 mb-4 flex items-center">
                        <div
                            class="w-full text-left py-3 font-semibold text-lg text-brown-700 dark:text-white flex items-center">
                            <i class="fas fa-mug-hot mr-2"></i> Menu
                        </div>
                        <img src="{{ asset('Photo/logoshop.png') }}" class="w-10 h-10 mr-2">
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 mb-4 flex justify-between items-center">
                        <span class="text-lg font-semibold text-brown-700 dark:text-white">Orders</span>
                        <span id="order-count" class="bg-red-500 text-white rounded-full px-2 py-1 text-xs">0</span>
                    </div>
                    <div class=" left-0 right-0">
                        <div class="bg-white rounded-lg shadow text-center hover:bg-orange-300">
                            <button onclick="showWishlistPopup()"
                                class="px-4 py-5 w-full font-semibold bg-brown-500 text-black">Open
                                Wishlist</button>
                        </div>
                    </div>

                </div>


                <!-- Logout Button -->
                <div class="absolute bottom-4 left-0 right-0">
                    <div class="bg-orange-200 rounded-lg shadow text-center hover:bg-orange-300">
                        <button class="px-4 py-5 w-full font-semibold bg-brown-500 text-black">Logout</button>
                    </div>
                </div>
            </div>

            <!-- Menu Categories -->
            <div class="col-span-7 bg-white dark:bg-gray-800 rounded-lg shadow p-6 max-h-[690px]">
                <h2 class="text-xl font-bold text-gray-700 dark:text-white mb-6">Categories</h2>

                <!-- Categories Selection Bar -->
                <div class="flex space-x-4 overflow-x-auto pb-4 mb-6">
                    <button onclick="showMenu('coffee')"
                        class="font-bold px-4 py-2 bg-orange-200 text-gray-700 rounded-lg focus:outline-none hover:bg-orange-300">Coffee</button>
                    <button onclick="showMenu('tea')"
                        class="font-bold px-4 py-2 bg-orange-200 text-gray-700 rounded-lg focus:outline-none hover:bg-orange-300">Tea</button>
                    <button onclick="showMenu('juice')"
                        class="font-bold px-4 py-2 bg-orange-200 text-gray-700 rounded-lg focus:outline-none hover:bg-orange-300">Juice</button>
                    <button onclick="showMenu('coffee_beans')"
                        class="font-bold px-4 py-2 bg-orange-200 text-gray-700 rounded-lg focus:outline-none hover:bg-orange-300">Coffee
                        Beans</button>
                </div>

                <!-- Items List -->
                @php
                    $menus = [
                        'coffee' => [
                            ['name' => 'Espresso', 'image' => 'espresso.png', 'price' => 60],
                            ['name' => 'Americano', 'image' => 'americano.png', 'price' => 50],
                            ['name' => 'Cappuccino', 'image' => 'cappuccino.png', 'price' => 80],
                            ['name' => 'Latte', 'image' => 'latte.png', 'price' => 80],
                            ['name' => 'Mocha', 'image' => 'mocha.png', 'price' => 80],
                            ['name' => 'Macchiato', 'image' => 'macchiato.png', 'price' => 50],
                            ['name' => 'Dirty', 'image' => 'dirty.png', 'price' => 80],
                            ['name' => 'Vietnamese', 'image' => 'vietnamese.png', 'price' => 75],
                            ['name' => 'Egg Coffee', 'image' => 'egg.png', 'price' => 65],
                            ['name' => 'Flat White', 'image' => 'flat.png', 'price' => 65],
                            ['name' => 'Affogato', 'image' => 'affogato.png', 'price' => 65],
                            ['name' => 'Cafe au Lait', 'image' => 'au.png', 'price' => 65],
                        ],
                        'tea' => [
                            ['name' => 'Bubble Tea', 'image' => 'bubble_tea.png', 'price' => 45],
                            ['name' => 'Thai Tea', 'image' => 'thai_tea.png', 'price' => 45],
                            ['name' => 'Green Tea', 'image' => 'green_tea.png', 'price' => 45],
                            ['name' => 'Matcha', 'image' => 'matcha.png', 'price' => 45],
                            ['name' => 'Black Tea', 'image' => 'black_tea.png', 'price' => 25],
                            ['name' => 'Strawberry Tea', 'image' => 'straw.png', 'price' => 35],
                            ['name' => 'Lemonade Tea', 'image' => 'lemon.png', 'price' => 20],
                            ['name' => 'Lipton Tea', 'image' => 'lipton.png', 'price' => 35],
                            ['name' => 'Cherry Tea', 'image' => 'cherry.png', 'price' => 50],
                            ['name' => 'Mixed Berry Tea', 'image' => 'mix.png', 'price' => 40],
                            ['name' => 'Watermelon Tea', 'image' => 'water_melon.png', 'price' => 40],
                            ['name' => 'Rose Tea', 'image' => 'rose.png', 'price' => 50],
                        ],
                        'juice' => [
                            ['name' => 'Watermelon', 'image' => 'watermelon_juice.png', 'price' => 30],
                            ['name' => 'Orange', 'image' => 'orange.png', 'price' => 30],
                            ['name' => 'Carrot', 'image' => 'carrot.png', 'price' => 30],
                            ['name' => 'Coconut', 'image' => 'coconut.png', 'price' => 30],
                            ['name' => 'Guava', 'image' => 'guava.png', 'price' => 30],
                            ['name' => 'Kiwi', 'image' => 'kiwi.png', 'price' => 35],
                            ['name' => 'Lemon juice', 'image' => 'lemon_juice.png', 'price' => 25],
                            ['name' => 'Mango', 'image' => 'mango.png', 'price' => 30],
                            ['name' => 'Papaya', 'image' => 'papaya.png', 'price' => 30],
                            ['name' => 'Pineapple', 'image' => 'pineapple.png', 'price' => 30],
                            ['name' => 'Strawberry', 'image' => 'strawberry_juice.png', 'price' => 30],
                            ['name' => 'Passion fruit', 'image' => 'passion.png', 'price' => 30],
                        ],
                        'coffee_beans' => [
                            ['name' => 'Arabica', 'image' => 'coffeebag.png', 'price' => 199],
                            ['name' => 'Robusta', 'image' => 'coffeebag.png', 'price' => 199],
                            ['name' => 'Liberica', 'image' => 'coffeebag.png', 'price' => 250],
                            ['name' => 'Excelsa', 'image' => 'coffeebag.png', 'price' => 250],
                            ['name' => 'Sumatra Mandheling', 'image' => 'coffeebag.png', 'price' => 299],
                            ['name' => 'Colombian Supremo', 'image' => 'coffeebag.png', 'price' => 350],
                            ['name' => 'Ethiopian Yirgacheffe', 'image' => 'coffeebag.png', 'price' => 350],
                            ['name' => 'Guatemalan Antigua', 'image' => 'coffeebag.png', 'price' => 350],
                            ['name' => 'Brazilian Santos', 'image' => 'coffeebag.png', 'price' => 400],
                            ['name' => 'Costa Rican Tarrazú', 'image' => 'coffeebag.png', 'price' => 400],
                            ['name' => 'Panama Geisha', 'image' => 'coffeebag.png', 'price' => 400],
                            ['name' => 'Hawaiian Kona', 'image' => 'coffeebag.png', 'price' => 400],
                        ],
                    ];

                @endphp


                @foreach($menus as $category => $items)
                    <div class="gap-x-5 gap-y-5 grid grid-cols-4 menu-category {{ $category }} hidden">
                        <!-- Grid แถวละ 4 -->
                        @foreach($items as $item)
                            <button
                                onclick="addToBag('{{ $item['name'] }}', '{{ asset('Photo/' . $item['image']) }}', {{ $item['price'] }})"
                                class="hover:border-gray-300 hover:shadow-lg bg-white rounded-lg shadow p-3 flex flex-col items-center">
                                <img src="{{ asset('Photo/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                    class="w-15 h-16 mb-2">
                                <span class="font-semibold text-gray-700">{{ $item['name'] }}</span>
                                <span class="font-semibold text-sm text-gray-500">{{ $item['price'] }} ฿</span>
                            </button>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <!-- Order Summary -->
            <div
                class="max-h-[690px] col-span-3 flex flex-col justify-between bg-white dark:bg-gray-800 rounded-lg shadow p-6 overflow-hidden">
                <div class="flex-grow">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-700 dark:text-white">Order No: #0000973</h3>
                        <i class="fas fa-trash text-gray-400 cursor-pointer" onclick="clearBag()"></i>
                    </div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-white">Phone: 0987654321</p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-white">Name: {{ Auth::user()->name }}</p>

                    <!-- Order Items Display -->
                    <div id="order-items" class="mb-2" style="max-height: 360px; overflow-y: auto; overflow-x: hidden;">
                    </div>

                    <div id="empty-bag" class="flex flex-col items-center justify-center h-full"
                        style="display: flex; height: calc(100% - 100px);">
                        <img src="{{ asset('Photo/empty_bag.png') }}" alt="Empty Bag" class="w-16 h-16 mb-4">
                        <p class="font-semibold text-gray-500 dark:text-gray-300">Your Bag is Empty</p>
                        <p class="text-gray-500 dark:text-gray-300">Looks like you haven't made your choice yet</p>
                    </div>
                </div>

                <div class="bg-green-200 dark:bg-gray-800 rounded-lg shadow p-3 mb-1 flex items-center justify-between">
                    <div class="font-semibold text-lg text-brown-700 dark:text-white">Total</div>
                    <div class="font-semibold text-lg text-brown-700 dark:text-white total-price">0 ฿</div>
                </div>

                <div class="mt-4 flex justify-between">
                    <div class="bg-orange-200 rounded-lg shadow text-center hover:bg-orange-300 flex-1 mr-2">


                        <div class="bg-orange-200 rounded-lg shadow text-center hover:bg-orange-300 flex-1 mr-2">
                            <form action="{{ route('order.add', ['id' => time()]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="items" id="orderItemsInput">
                                <input type="hidden" name="total" id="totalPriceInput">
                                <button type="submit" onclick="prepareOrderData(event)"
                                    class="px-4 py-5 w-full font-semibold bg-brown-500 text-black">
                                    Order
                                </button>
                            </form>
                        </div>


                    </div>
                    <div class="bg-orange-200 rounded-lg shadow text-center hover:bg-orange-300 flex-1 ml-2">
                        <button onclick="addAllToWishlist()"
                            class="mt-15 px-4 py-5 w-full font-semibold bg-brown-500 text-black">Wishlist</button>
                    </div>
                </div>
            </div>

            <!-- Wishlist Popup Modal -->
            <div id="wishlist-modal"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 relative">
                    <h3 class="text-lg font-semibold mb-4">Your Wishlist (<span id="wishlist-count">0</span>)</h3>
                    <div id="wishlist-items" class="space-y-2 mb-16">
                        <!-- Wishlist items will be appended here -->
                    </div>

                    <!-- ปุ่มปิด popup ด้านล่างขวา -->
                    <button onclick="closeWishlistPopup()"
                        class="absolute bottom-4 right-4 px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600">
                        Close
                    </button>
                </div>
            </div>

            <script>
                let orderItems = [];
                let wishlistItems = [];
                let totalPrice = 0;

                function showMenu(category) {
                    document.querySelectorAll('.menu-category').forEach(el => el.classList.add('hidden'));
                    document.querySelectorAll(`.${category}`).forEach(el => el.classList.remove('hidden'));
                }

                function addToBag(item, image, price) {
                    const existingItem = orderItems.find(order => order.item === item);
                    if (existingItem) {
                        existingItem.count += 1;
                    } else {
                        orderItems.push({ item, image, price, count: 1 });
                    }
                    updateOrderSummary();
                }

                function updateOrderSummary() {
                    const orderItemsContainer = document.getElementById('order-items');
                    const emptyBag = document.getElementById('empty-bag');
                    const orderCount = document.getElementById('order-count');
                    const totalContainer = document.querySelector('.total-price');

                    orderItemsContainer.innerHTML = '';
                    totalPrice = 0;

                    if (orderItems.length === 0) {
                        emptyBag.style.display = 'flex';
                        orderCount.textContent = '0';
                        totalContainer.textContent = '0 ฿';
                    } else {
                        emptyBag.style.display = 'none';
                        orderItems.forEach(order => {
                            totalPrice += order.price * order.count;

                            const itemDiv = document.createElement('div');
                            itemDiv.className = 'flex justify-between items-center p-2 border-b-2';
                            itemDiv.innerHTML = `
    <img src="${order.image}" alt="${order.item}" class="w-10 h-10 mr-2">
    <div class="flex flex-col">
        <span class="font-semibold">${order.item}</span>
        
        <span class="font-semibold text-gray-700">${order.price * order.count} ฿</span>
    </div>

    <span class="font-semibold">x${order.count}</span>
    <button onclick="removeItem('${order.item}')" class="text-white bg-red-500 hover:bg-red-600 font-semibold x-2 px-2 py-1 rounded">Remove</button>
`;
                            orderItemsContainer.appendChild(itemDiv);
                        });
                        orderCount.textContent = orderItems.reduce((total, order) => total + order.count, 0);
                        totalContainer.textContent = totalPrice + ' ฿';
                    }
                }

                function removeItem(item) {
                    const existingItem = orderItems.find(order => order.item === item);
                    if (existingItem) {
                        existingItem.count -= 1;
                        if (existingItem.count <= 0) {
                            orderItems = orderItems.filter(order => order.item !== item);
                        }
                        updateOrderSummary();
                    }
                }

                function clearBag() {
                    orderItems = [];
                    updateOrderSummary();
                }

                function addToWishlist(item, image) {
                    const existingItem = wishlistItems.find(wishlist => wishlist.item === item);
                    if (!existingItem) {
                        wishlistItems.push({ item, image });
                    }
                    showWishlistPopup();
                }

                function showWishlistPopup() {
                    const wishlistModal = document.getElementById('wishlist-modal');
                    const wishlistItemsContainer = document.getElementById('wishlist-items');
                    const wishlistCount = document.getElementById('wishlist-count');

                    wishlistItemsContainer.innerHTML = '';

                    if (wishlistItems.length === 0) {
                        wishlistItemsContainer.innerHTML = '<p>Your wishlist is empty.</p>';
                        wishlistCount.textContent = '0'; // ถ้า wishlist ว่างให้แสดง 0
                    } else {
                        wishlistCount.textContent = wishlistItems.length; // อัปเดตจำนวนใน wishlist
                        wishlistItems.forEach((wishlist, index) => {
                            const itemDiv = document.createElement('div');
                            itemDiv.className = 'flex items-center justify-between p-2 border-b';
                            itemDiv.innerHTML = `
                <img src="${wishlist.image}" alt="${wishlist.item}" class="w-10 h-10 mr-2">
                <span class="font-semibold">${wishlist.item} x${wishlist.count}</span>
                <button onclick="deleteFromWishlist(${index})" class="text-white bg-red-500 hover:bg-red-600 font-semibold px-1 py-1 rounded">Delete</button>
            `;
                            wishlistItemsContainer.appendChild(itemDiv);
                        });
                    }

                    wishlistModal.classList.remove('hidden');
                }





                function deleteFromWishlist(index) {
                    const existingItem = wishlistItems[index];

                    if (existingItem) {
                        if (existingItem.count > 1) {
                            existingItem.count -= 1; // ลดจำนวนไอเทมลงทีละ 1
                        } else {
                            wishlistItems.splice(index, 1); // ลบไอเทมถ้าจำนวนถึง 0
                        }
                        showWishlistPopup(); // อัปเดต UI
                    }
                }


                function closeWishlistPopup() {
                    document.getElementById('wishlist-modal').classList.add('hidden');
                }

                // First show the coffee category
                document.addEventListener("DOMContentLoaded", () => showMenu('coffee'));

                function addAllToWishlist() {
                    orderItems.forEach(order => {
                        for (let i = 0; i < order.count; i++) {
                            addToWishlist(order.item, order.image);
                        }
                    });
                    clearBag(); // ลบรายการที่ถูกเลือกออกจาก orderItems
                }

                // ปรับปรุงฟังก์ชัน addToWishlist
                function addToWishlist(item, image) {
                    const existingItem = wishlistItems.find(wishlist => wishlist.item === item);
                    if (existingItem) {
                        existingItem.count += 1; // เพิ่มจำนวนหากมีอยู่แล้ว
                    } else {
                        wishlistItems.push({ item, image, count: 1 }); // เริ่มต้นจำนวนเป็น 1
                    }
                }

                function deletefromselect() {
                    clearBag(); // ลบรายการที่ถูกเลือกออกจาก orderItems
                }




                function prepareOrderData(event) {
                    event.preventDefault();
                    if (orderItems.length === 0) {
                        alert('เลือกเมนูก่อนจ้า พรี่ๆ');
                        return;
                    }

                    document.getElementById('orderItemsInput').value = JSON.stringify(orderItems);
                    document.getElementById('totalPriceInput').value = totalPrice;
                    event.target.form.submit();
                }
            </script>
        </div>
    </div>
</x-app-layout>