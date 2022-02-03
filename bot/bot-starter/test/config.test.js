const config = require('../src/config');

describe('#config', () => {
  it('contains the required keys', () => {
    expect(config).toHaveProperty('TWILIO_ACCOUNT_SID');
    expect(config).toHaveProperty('TWILIO_API_KEY');
    expect(config).toHaveProperty('TWILIO_API_SECRET');
    expect(config).toHaveProperty('TWILIO_CHAT_SERVICE_SID');
    expect(config).toHaveProperty('TWILIO_NOTIFICATION_SERVICE_SID');
    expect(config).toHaveProperty('TWILIO_SYNC_SERVICE_SID');
  });
});
