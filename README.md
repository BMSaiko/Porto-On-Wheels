# Porto-On-Wheels 🚗

A comprehensive vehicle rental management system developed in Java for exploring Porto and northern Portugal. This console-based application provides complete management of vehicles, clients, reservations, and rental operations.

## 📖 Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies](#technologies)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Class Diagram](#class-diagram)
- [Contributors](#contributors)
- [License](#license)

## 🎯 Overview

Porto-On-Wheels is a sophisticated vehicle rental management system designed to handle all aspects of a car rental business. The system manages vehicle inventory, client registrations, reservation processing, rental transactions, and provides comprehensive reporting capabilities. Built with object-oriented principles in Java, it demonstrates enterprise-level application architecture.

## ✨ Features

### 🚗 Vehicle Management
- **Complete Vehicle Catalog** - Manage cars, motorcycles, and commercial vehicles
- **Vehicle Status Tracking** - Available, rented, maintenance, retired
- **Category Management** - Economy, comfort, premium, luxury classifications
- **Detailed Specifications** - Brand, model, year, fuel type, transmission, features

### 👥 Client Management
- **Client Registration** - Complete client profiles with personal and document information
- **Client Categories** - Regular, frequent, corporate clients with different pricing
- **Rental History** - Track all client rentals and preferences
- **Document Management** - Driver's license validation and document tracking

### 📅 Reservation System
- **Advanced Booking** - Reserve vehicles for specific dates and periods
- **Availability Checking** - Real-time vehicle availability verification
- **Automatic Assignments** - Smart vehicle assignment based on category and features
- **Waitlist Management** - Handle fully booked periods with waitlist functionality

### 💰 Pricing & Payments
- **Dynamic Pricing** - Rates based on vehicle category, season, and rental duration
- **Discount System** - Client category discounts, promotional offers, loyalty rewards
- **Payment Processing** - Handle deposits, payments, and refunds
- **Invoice Generation** - Detailed rental invoices with breakdown of charges

### 📊 Reports & Analytics
- **Operational Reports** - Daily, weekly, monthly rental reports
- **Financial Analytics** - Revenue, occupancy rates, profitability analysis
- **Vehicle Utilization** - Usage statistics and maintenance scheduling
- **Client Statistics** - Rental frequency, preferences, and value analysis

### 🔧 Administrative Features
- **User Management** - Different access levels for staff and administrators
- **System Configuration** - Configure rental policies, pricing rules, business rules
- **Data Backup & Recovery** - Complete data persistence and recovery systems
- **Audit Trail** - Track all system operations and changes

## 🛠️ Technologies

- **Java 17+** - Core programming language with latest features
- **Object-Oriented Programming** - Advanced OOP principles and design patterns
- **Collections Framework** - Extensive use of Java Collections for data management
- **File I/O Operations** - Robust file-based data persistence system
- **Date & Time API** - Comprehensive date handling for reservations and rentals
- **Input Validation** - Advanced validation with regular expressions
- **Exception Handling** - Comprehensive error handling and recovery

## 📥 Installation

### Prerequisites
- Java JDK 17 or higher
- Git version control system

### Installation Steps

1. **Clone the Repository**
```bash
git clone https://github.com/BMSaiko/Porto-On-Wheels.git
cd Porto-On-Wheels
Compile the Project

bash
# Compile all Java source files
javac -d bin -sourcepath src src/**/*.java

# Or use the provided build script (if available)
./build.sh
Run the Application

bash
java -cp bin com.portoonwheels.Main
Alternative: Using an IDE
Open the project in IntelliJ IDEA, Eclipse, or VS Code

Configure the JDK to version 17 or higher

Build the project using the IDE's build system

Run the Main class from the com.portoonwheels package

🚀 Usage
Main Menu System
text
=== PORTO-ON-WHEELS RENTAL SYSTEM ===
1. Vehicle Management
2. Client Management
3. Reservation System
4. Rental Operations
5. Reports & Analytics
6. System Administration
0. Exit System
Vehicle Management
Add New Vehicle - Register new vehicles to the fleet

Update Vehicle Info - Modify vehicle details and status

Remove Vehicle - Remove vehicles from active service

View Vehicle Catalog - Browse all available vehicles

Maintenance Tracking - Schedule and track vehicle maintenance

Client Management
Register New Client - Create new client profiles

Update Client Information - Modify client details and preferences

View Client History - Access complete rental history

Client Category Management - Manage client classifications and benefits

Reservation System
Create Reservation - Book vehicles for future dates

Modify Reservation - Change reservation details

Cancel Reservation - Process reservation cancellations

View Reservation Calendar - Check vehicle availability calendar

Rental Operations
Process Rental - Check-out vehicles to clients

Process Return - Check-in returned vehicles

Damage Reporting - Document vehicle condition and damages

Extension Processing - Handle rental period extensions

📁 Project Structure
text
Porto-On-Wheels/
├── src/
│   └── com/
│       └── portoonwheels/
│           ├── Main.java                    # Application entry point
│           ├── model/                       # Data model classes
│           │   ├── Vehicle.java             # Vehicle entity
│           │   ├── Client.java              # Client entity
│           │   ├── Reservation.java         # Reservation entity
│           │   ├── Rental.java              # Rental transaction
│           │   ├── Invoice.java             # Billing information
│           │   └── enums/                   # Enumeration types
│           │       ├── VehicleType.java
│           │       ├── VehicleStatus.java
│           │       ├── FuelType.java
│           │       └── ClientCategory.java
│           ├── service/                     # Business logic layer
│           │   ├── VehicleService.java      # Vehicle operations
│           │   ├── ClientService.java       # Client operations
│           │   ├── ReservationService.java  # Reservation handling
│           │   ├── RentalService.java       # Rental transactions
│           │   └── ReportService.java       # Reporting functions
│           ├── repository/                  # Data access layer
│           │   ├── VehicleRepository.java   # Vehicle data access
│           │   ├── ClientRepository.java    # Client data access
│           │   ├── ReservationRepository.java
│           │   └── FileDataManager.java     # File I/O operations
│           ├── util/                        # Utility classes
│           │   ├── DateUtils.java           # Date manipulations
│           │   ├── InputValidator.java      # Input validation
│           │   ├── PriceCalculator.java     # Pricing calculations
│           │   └── ConsoleUI.java           # User interface helpers
│           └── exception/                   # Custom exceptions
│               ├── VehicleNotFoundException.java
│               ├── ClientNotFoundException.java
│               ├── ReservationException.java
│               └── RentalException.java
├── data/                                   # Data storage directory
│   ├── vehicles.dat                       # Vehicle database
│   ├── clients.dat                        # Client database
│   ├── reservations.dat                   # Reservation records
│   ├── rentals.dat                        # Rental history
│   └── invoices.dat                       # Billing records
├── docs/                                  # Documentation
│   ├── user-manual.md                    # User guide
│   └── technical-specs.md                # Technical documentation
├── config/                               # Configuration files
│   └── application.properties            # System configuration
├── build.sh                             # Build script (Unix/Linux)
├── build.bat                            # Build script (Windows)
└── README.md                            # Project documentation
📊 Class Diagram
text
Main
  ↓
Controller Layer
  ↓
Service Layer (VehicleService, ClientService, ReservationService, RentalService)
  ↓
Repository Layer (VehicleRepository, ClientRepository, ReservationRepository)
  ↓
Model Layer (Vehicle, Client, Reservation, Rental, Invoice)
  ↓
FileDataManager
Key Class Relationships:
Vehicle → VehicleType, VehicleStatus, FuelType (Enums)

Client → ClientCategory (Enum)

Reservation → Vehicle, Client (Composition)

Rental → Reservation, Invoice (Association)

Services → Repositories (Dependency)

👥 Contributors
Bruno Silva (@BMSaiko) - Project Lead & Core Development

Development Team - Additional contributors

Developed as part of the Software Engineering curriculum at Instituto Superior de Engenharia do Porto (ISEP).

📄 License
This project is developed for academic purposes as part of the Computer Engineering curriculum at ISEP. All rights reserved by the contributors.

🔄 System Requirements
Minimum Requirements
Java Runtime: JDK 17 or higher

Memory: 512MB RAM

Storage: 100MB available space

Operating System: Windows 10+, macOS 10.14+, or Linux Ubuntu 18.04+

Recommended Requirements
Java Runtime: JDK 21 LTS

Memory: 1GB RAM or higher

Storage: 500MB available space

Display: 1024x768 resolution or higher

🆘 Support
For technical support or questions about this system:

Check the documentation in the docs/ directory

Review the source code comments

Contact the development team through GitHub issues

🔮 Future Enhancements
Web-based user interface

Mobile application companion

Integration with payment gateways

GPS tracking and telematics

Advanced analytics dashboard

Multi-branch support system
