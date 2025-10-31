# network
This is a package for PHP-CLI that can ping network addresses.

# Functions
- **ping(string $ip, int $port, float $timeout=1.0):bool**: Pings a given tcp address, returns true on success or false on failure.
- **isValidIp(mixed $ip):bool**: Returns true if the given value is a valid IP address, returns false otherwise.
- **isValidPort(mixed $port):bool**: Returns true if the given value is a valid port number, returns false otherwise.
- **isValidTimeout(mixed $timeout):bool**: Returns true if the given value is a valid timeout, returns false otherwise.