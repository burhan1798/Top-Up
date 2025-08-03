<h1 align="center">💎 Bulla Top-Up BaZaR💎</h1>

<p align="center">
  <b>Fast, Secure & Real-time Game Top-Up Solution</b> <br>
  <i>Built with Firebase, Node.js & Modern Frontend</i>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Frontend-HTML%2FCSS%2FJS-blue?style=for-the-badge" />
  <img src="https://img.shields.io/badge/Backend-Node.js-green?style=for-the-badge" />
  <img src="https://img.shields.io/badge/Database-Firebase-orange?style=for-the-badge" />
  <img src="https://img.shields.io/badge/Status-Active-success?style=for-the-badge" />
</p>

---

## 🌟 Overview

**Bulla Top-Up** হলো একটি সম্পূর্ণ ওয়েব-ভিত্তিক **Game Diamond / Coin Top-Up System**,  
যেখানে ব্যবহারকারী তাদের **UID দিয়ে package কিনতে পারে** এবং অ্যাডমিন রিয়েল-টাইমে ট্র্যাক করতে পারে।  

✅ Firebase Realtime Database connected  
✅ Admin panel for request management  
✅ Email notification system for every payment request  

---

## 🚀 Features

### 👤 **User Panel**
- Account **Registration & Login** (Firebase LocalStorage)
- **UID দিয়ে Package Select & Buy Now**
- **Multiple Payment Methods** (Bkash / Nagad)
- **Real-time Order Tracking** in **My Orders**
- **Instant Email Notification** to Admin after Payment

### 🛡 **Admin Panel**
- Real-time **Top-Up Requests** view
- **Pending / Complete / Failed** status update
- **Registered Users List** with details
- **Live Firebase Connection** for instant updates

---

## ⚙️ Technology Stack

| Layer          | Technology                  |
|----------------|----------------------------|
| **Frontend**   | HTML, CSS, JavaScript (Vanilla) |
| **Database**   | Firebase Realtime Database |
| **Backend**    | Node.js (Express on Render) |
| **Email**      | Nodemailer (Gmail App Password) |

---

## 📂 Project Structure
Bulla-TopUp/ │ ├── 📄 index.html           # 🔹 Login Page ├── 📄 register.html        # 🔹 User Registration ├── 📄 main.html            # 🔹 User Dashboard ├── 📄 add_funds.html       # 🔹 Package Purchase Page ├── 📄 my_orders.html       # 🔹 Order History Page ├── 📄 admin.html           # 🔹 Admin Panel (Topup Requests & Users) │ ├── 📂 assets/              # 🎨 Images, CSS, JS │   ├── 📄 style.css        # 🔹 Main styling │   └── 📄 script.js        # 🔹 Optional scripts │ ├── 📂 backend/             # ⚡ Email Backend (Node.js on Render) │   ├── 📄 server.js        # 🔹 Node.js Express server │   └── 📄 package.json     # 🔹 Node project config │ └── 📄 README.md            # 📘 Project Documentation
