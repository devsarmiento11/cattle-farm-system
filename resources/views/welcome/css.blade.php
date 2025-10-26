<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Main - Cattle Farm</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #fff;
        color: #000;
    }
    .categories {
        background: #fff;
        border-radius: 20px;
        padding: 20px 30px;
        display: flex;
        justify-content: center;
        gap: 40px;
        margin: 40px auto;
        max-width: 600px;
        box-shadow: 0 0 10px rgb(0 0 0 / 0.1);
    }
    .category-item {
        text-align: center;
        cursor: pointer;
        border: none;
        background: none;
        padding: 10px;
        transition: background-color 3s ease;
    }
    .category-item:hover {
        background-color: green;
        border-radius: 10px;
    }
    .category-icon {
        width: 70px;
        height: 70px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        font-size: 36px;
        color: #333;
        box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
    }
    .available-cattles {
        max-width: 900px;
        margin: 0 auto 40px auto;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 20px;
        padding: 0 20px;
    }
    .cattle-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        padding: 10px;
        text-align: center;
        user-select: none;
    }
    .cattle-card img {
        width: 100%;
        border-radius: 15px;
        height: 120px;
        object-fit: cover;
    }
    .cattle-name {
        font-weight: 700;
        margin-top: 10px;
    }
    .cattle-price {
        font-size: 0.9rem;
        color: #555;
        margin: 5px 0 2px 0;
    }
    .cattle-rating {
        font-size: 0.8rem;
        color: #007b8a;
        margin-bottom: 5px;
    }
    .btn-details {
        background: #007b8a;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 5px 10px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    .btn-details:hover {
        background: #005f66;
    }
    .cattle-details {
        font-size: 0.8rem;
        color: #666;
        margin-bottom: 5px;
        line-height: 1.2;
    }
    .about-us {
        max-width: 600px;
        margin: 0 auto 40px auto;
        padding: 0 20px;
        text-align: center;
        font-size: 0.9rem;
        color: #444;
        line-height: 1.4;
    }
    footer {
        background: #eee;
        padding: 15px 20px;
        text-align: center;
        font-size: 0.8rem;
        color: #666;
        user-select: none;
    }
    .payment-methods, .contact-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 10px;
    }
    .payment-methods img, .contact-icons img {
        height: 25px;
        cursor: pointer;
    }
    .nav-item {
        margin-right: 15px;
        
    }
    .nav-link {
        transition: background-color 3s ease, color 3s ease, padding 3s ease;
    }
    .nav-link:hover {
        color: white !important;
        background-color: darkgreen !important;
        padding: 5px 12px;
        border-radius: 20px;
        transition: background-color 0.1s ease, color 0.5s ease, padding 3s ease;
    }
</style>
