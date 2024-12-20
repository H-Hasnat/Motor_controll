# from flask import Flask, request, jsonify
# import serial
# import time

# app = Flask(__name__)

# # Set up serial communication with Arduino
# # Replace 'COM4' with the correct port for your Arduino (e.g., 'COM3', 'COM5', or '/dev/ttyUSB0')
# try:
#     arduino = serial.Serial('COM6', 9600, timeout=1)  # Update this with your port
#     time.sleep(2)  # Wait for Arduino to initialize
#     print("Arduino connected successfully.")
# except serial.SerialException as e:
#     print(f"Error connecting to Arduino: {e}")
#     arduino = None

# @app.route('/motor/speed', methods=['POST'])
# def update_motor_speed():
#     """
#     Receive motor speed from the Laravel app and send it to the Arduino.
#     """
#     if arduino is None:
#         return jsonify({"error": "Arduino not connected"}), 500

#     try:
#         # Get the JSON data from the POST request
#         data = request.get_json()
#         speed = data.get('speed')  # Get the speed value from the request

#         if speed is None:
#             return jsonify({"error": "No speed value provided"}), 400

#         # Send the speed to the Arduino over the serial connection
#         arduino.write(f"{speed}\n".encode())  # Send the speed to Arduino
#         print(f"Speed set to: {speed}")
#         return jsonify({"message": "Motor speed updated", "speed": speed})

#     except Exception as e:
#         return jsonify({"error": str(e)}), 500

# if __name__ == "__main__":
#     app.run(host='0.0.0.0', port=5000)  # Start the Flask app on port 5000







from flask import Flask, request, jsonify
import serial
import time

app = Flask(__name__)

# Set up serial communication with Arduino
try:
    arduino = serial.Serial('COM6', 9600, timeout=1)  # Update this with your port
    time.sleep(2)  # Wait for Arduino to initialize
    is_connected = True
    print("Arduino connected successfully.")
except serial.SerialException as e:
    print(f"Error connecting to Arduino: {e}")
    arduino = None
    is_connected = False

@app.route('/motor/status', methods=['GET'])
def motor_status():
    """Check if Arduino is connected."""
    global is_connected
    return jsonify({"connected": is_connected})

@app.route('/motor/speed', methods=['POST'])
def update_motor_speed():
    """Update motor speed."""
    global is_connected
    if not is_connected:
        return jsonify({"error": "Arduino not connected"}), 500

    try:
        data = request.get_json()
        speed = data.get('speed')

        if speed is None:
            return jsonify({"error": "No speed value provided"}), 400

        arduino.write(f"{speed}\n".encode())
        print(f"Speed set to: {speed}")
        return jsonify({"message": "Motor speed updated", "speed": speed})
    except Exception as e:
        return jsonify({"error": str(e)}), 500

@app.route('/motor/off', methods=['POST'])
def motor_off():
    """Turn off the motor."""
    global is_connected
    if not is_connected:
        return jsonify({"error": "Arduino not connected"}), 500

    try:
        arduino.write("0\n".encode())  # Assuming "0" stops the motor
        print("Motor turned off.")
        return jsonify({"message": "Motor turned off"})
    except Exception as e:
        return jsonify({"error": str(e)}), 500

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5000)




