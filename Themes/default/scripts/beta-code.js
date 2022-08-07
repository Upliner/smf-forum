(function(f){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f()}else if(typeof define==="function"&&define.amd){define([],f)}else{var g;if(typeof window!=="undefined"){g=window}else if(typeof global!=="undefined"){g=global}else if(typeof self!=="undefined"){g=self}else{g=this}g.BetaCode = f()}})(function(){var define,module,exports;return (function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
const betaCodeToUnicode = require('./beta_code_to_unicode.json');
const unicodeToBetaCode = require('./unicode_to_beta_code.json');

function longestKeyLength(obj) {
  const keys = Object.keys(obj);
  let ii;
  let key;
  let length = 0;

  for (ii = 0; ii < keys.length; ii += 1) {
    key = keys[ii];

    if (Object.prototype.hasOwnProperty.call(obj, key)) {
      if (key.length > length) {
        length = key.length;
      }
    }
  }

  return length;
}

// this function replaces σ with ς when:
//   - at the end of a line
//   - followed by whitespace
//   - followed by a punctuation character
// REGEX NOTE: word boundary \b doesn't work well with Unicode
function sigmaToEndOfWordSigma(string) {
  return string.replace(/σ(?=[,.:;·\s]|$)/g, 'ς');
}

function min(a, b) {
  return a < b ? a : b;
}

function normalize(string) {
  if (string.normalize) {
    return string.normalize();
  }

  return string;
}

function mergeObjects(obj1, obj2) {
  const keys1 = Object.keys(obj1);
  const keys2 = Object.keys(obj2);
  const retObj = {};
  let key;
  let ii;

  for (ii = 0; ii < keys1.length; ii += 1) {
    key = keys1[ii];

    retObj[key] = obj1[key];
  }

  for (ii = 0; ii < keys2.length; ii += 1) {
    key = keys2[ii];

    retObj[key] = obj2[key];
  }

  return retObj;
}

function greekToBetaCode(greek, customMap) {
  const greekCharacters = normalize(greek).split('');
  const betaCodeCharacters = [];
  const map = mergeObjects(unicodeToBetaCode, customMap || {});
  let currentCharacter;
  let ii;

  for (ii = 0; ii < greekCharacters.length; ii += 1) {
    currentCharacter = greekCharacters[ii];

    if (Object.prototype.hasOwnProperty.call(map, currentCharacter)) {
      betaCodeCharacters.push(map[currentCharacter]);
    } else {
      betaCodeCharacters.push(currentCharacter);
    }
  }

  return betaCodeCharacters.join('');
}

function betaCodeToGreek(betaCode, customMap) {
  const betaCodeCharacters = normalize(betaCode).split('');
  const greekCharacters = [];
  const map = mergeObjects(betaCodeToUnicode, customMap || {});
  const maxBetaCodeCharacterLength = longestKeyLength(map);
  let start = 0;
  let end;
  let slice;
  let newStart;
  let currentCharacter;
  let maxLength;

  while (start <= betaCodeCharacters.length) {
    currentCharacter = betaCodeCharacters[start];
    newStart = start + 1;
    maxLength = min(betaCodeCharacters.length, start + maxBetaCodeCharacterLength);

    // match the longest possible substring that's valid Beta Code, from left to right
    // for example 'e)' is valid Beta Code (ἐ) but 'e)/' is also valid Beta Code (ἕ)
    // the string 'e)/' should be interpreted as 'e)/' and not as 'e)' + '/'
    for (end = newStart; end <= maxLength; end += 1) {
      slice = betaCodeCharacters.slice(start, end).join('');

      if (Object.prototype.hasOwnProperty.call(map, slice)) {
        currentCharacter = map[slice];
        newStart = end;
      }
    }

    greekCharacters.push(currentCharacter);
    start = newStart;
  }

  return sigmaToEndOfWordSigma(greekCharacters.join(''));
}

module.exports = {
  greekToBetaCode,
  betaCodeToGreek,
};

},{"./beta_code_to_unicode.json":2,"./unicode_to_beta_code.json":3}],2:[function(require,module,exports){
module.exports={
  "#": "ʹ",
  "(": "ʽ",
  ")": "ʼ",
  "*(/A": "Ἅ",
  "*(/E": "Ἕ",
  "*(/H": "Ἥ",
  "*(/I": "Ἵ",
  "*(/O": "Ὅ",
  "*(/U": "Ὕ",
  "*(/W": "Ὥ",
  "*(/a": "Ἅ",
  "*(/e": "Ἕ",
  "*(/h": "Ἥ",
  "*(/i": "Ἵ",
  "*(/o": "Ὅ",
  "*(/u": "Ὕ",
  "*(/w": "Ὥ",
  "*(/|A": "ᾍ",
  "*(/A|": "ᾍ",
  "*(/|H": "ᾝ",
  "*(/H|": "ᾝ",
  "*(/|W": "ᾭ",
  "*(/W|": "ᾭ",
  "*(/|a": "ᾍ",
  "*(/a|": "ᾍ",
  "*(/|h": "ᾝ",
  "*(/h|": "ᾝ",
  "*(/|w": "ᾭ",
  "*(/w|": "ᾭ",
  "*(=A": "Ἇ",
  "*(=H": "Ἧ",
  "*(=I": "Ἷ",
  "*(=U": "Ὗ",
  "*(=W": "Ὧ",
  "*(=a": "Ἇ",
  "*(=h": "Ἧ",
  "*(=i": "Ἷ",
  "*(=u": "Ὗ",
  "*(=w": "Ὧ",
  "*(=|A": "ᾏ",
  "*(=A|": "ᾏ",
  "*(=|H": "ᾟ",
  "*(=H|": "ᾟ",
  "*(=|W": "ᾯ",
  "*(=W|": "ᾯ",
  "*(=|a": "ᾏ",
  "*(=a|": "ᾏ",
  "*(=|h": "ᾟ",
  "*(=h|": "ᾟ",
  "*(=|w": "ᾯ",
  "*(=w|": "ᾯ",
  "*(A": "Ἁ",
  "*(E": "Ἑ",
  "*(H": "Ἡ",
  "*(I": "Ἱ",
  "*(O": "Ὁ",
  "*(R": "Ῥ",
  "*(U": "Ὑ",
  "*(W": "Ὡ",
  "*(\\A": "Ἃ",
  "*(\\E": "Ἓ",
  "*(\\H": "Ἣ",
  "*(\\I": "Ἳ",
  "*(\\O": "Ὃ",
  "*(\\U": "Ὓ",
  "*(\\W": "Ὣ",
  "*(\\a": "Ἃ",
  "*(\\e": "Ἓ",
  "*(\\h": "Ἣ",
  "*(\\i": "Ἳ",
  "*(\\o": "Ὃ",
  "*(\\u": "Ὓ",
  "*(\\w": "Ὣ",
  "*(\\|A": "ᾋ",
  "*(\\A|": "ᾋ",
  "*(\\|H": "ᾛ",
  "*(\\H|": "ᾛ",
  "*(\\|W": "ᾫ",
  "*(\\W|": "ᾫ",
  "*(\\|a": "ᾋ",
  "*(\\a|": "ᾋ",
  "*(\\|h": "ᾛ",
  "*(\\h|": "ᾛ",
  "*(\\|w": "ᾫ",
  "*(\\w|": "ᾫ",
  "*(a": "Ἁ",
  "*(e": "Ἑ",
  "*(h": "Ἡ",
  "*(i": "Ἱ",
  "*(o": "Ὁ",
  "*(r": "Ῥ",
  "*(u": "Ὑ",
  "*(w": "Ὡ",
  "*(|A": "ᾉ",
  "*(A|": "ᾉ",
  "*(|H": "ᾙ",
  "*(H|": "ᾙ",
  "*(|W": "ᾩ",
  "*(W|": "ᾩ",
  "*(|a": "ᾉ",
  "*(a|": "ᾉ",
  "*(|h": "ᾙ",
  "*(h|": "ᾙ",
  "*(|w": "ᾩ",
  "*(w|": "ᾩ",
  "*)/A": "Ἄ",
  "*)/E": "Ἔ",
  "*)/H": "Ἤ",
  "*)/I": "Ἴ",
  "*)/O": "Ὄ",
  "*)/W": "Ὤ",
  "*)/a": "Ἄ",
  "*)/e": "Ἔ",
  "*)/h": "Ἤ",
  "*)/i": "Ἴ",
  "*)/o": "Ὄ",
  "*)/w": "Ὤ",
  "*)/|A": "ᾌ",
  "*)/A|": "ᾌ",
  "*)/|H": "ᾜ",
  "*)/H|": "ᾜ",
  "*)/|W": "ᾬ",
  "*)/W|": "ᾬ",
  "*)/|a": "ᾌ",
  "*)/a|": "ᾌ",
  "*)/|h": "ᾜ",
  "*)/h|": "ᾜ",
  "*)/|w": "ᾬ",
  "*)/w|": "ᾬ",
  "*)=A": "Ἆ",
  "*)=H": "Ἦ",
  "*)=I": "Ἶ",
  "*)=W": "Ὦ",
  "*)=a": "Ἆ",
  "*)=h": "Ἦ",
  "*)=i": "Ἶ",
  "*)=w": "Ὦ",
  "*)=|A": "ᾎ",
  "*)=A|": "ᾎ",
  "*)=|H": "ᾞ",
  "*)=H|": "ᾞ",
  "*)=|W": "ᾮ",
  "*)=W|": "ᾮ",
  "*)=|a": "ᾎ",
  "*)=a|": "ᾎ",
  "*)=|h": "ᾞ",
  "*)=h|": "ᾞ",
  "*)=|w": "ᾮ",
  "*)=w|": "ᾮ",
  "*)A": "Ἀ",
  "*)E": "Ἐ",
  "*)H": "Ἠ",
  "*)I": "Ἰ",
  "*)O": "Ὀ",
  "*)W": "Ὠ",
  "*)\\A": "Ἂ",
  "*)\\E": "Ἒ",
  "*)\\H": "Ἢ",
  "*)\\I": "Ἲ",
  "*)\\O": "Ὂ",
  "*)\\W": "Ὢ",
  "*)\\a": "Ἂ",
  "*)\\e": "Ἒ",
  "*)\\h": "Ἢ",
  "*)\\i": "Ἲ",
  "*)\\o": "Ὂ",
  "*)\\w": "Ὢ",
  "*)\\|A": "ᾊ",
  "*)\\A|": "ᾊ",
  "*)\\|H": "ᾚ",
  "*)\\H|": "ᾚ",
  "*)\\|W": "ᾪ",
  "*)\\W|": "ᾪ",
  "*)\\|a": "ᾊ",
  "*)\\a|": "ᾊ",
  "*)\\|h": "ᾚ",
  "*)\\h|": "ᾚ",
  "*)\\|w": "ᾪ",
  "*)\\w|": "ᾪ",
  "*)a": "Ἀ",
  "*)e": "Ἐ",
  "*)h": "Ἠ",
  "*)i": "Ἰ",
  "*)o": "Ὀ",
  "*)w": "Ὠ",
  "*)|A": "ᾈ",
  "*)A|": "ᾈ",
  "*)|H": "ᾘ",
  "*)H|": "ᾘ",
  "*)|W": "ᾨ",
  "*)W|": "ᾨ",
  "*)|a": "ᾈ",
  "*)a|": "ᾈ",
  "*)|h": "ᾘ",
  "*)h|": "ᾘ",
  "*)|w": "ᾨ",
  "*)w|": "ᾨ",
  "*+I": "Ϊ",
  "*+U": "Ϋ",
  "*+i": "Ϊ",
  "*+u": "Ϋ",
  "*/A": "Ά",
  "*/E": "Έ",
  "*/H": "Ή",
  "*/I": "Ί",
  "*/O": "Ό",
  "*/U": "Ύ",
  "*/W": "Ώ",
  "*/a": "Ά",
  "*/e": "Έ",
  "*/h": "Ή",
  "*/i": "Ί",
  "*/o": "Ό",
  "*/u": "Ύ",
  "*/w": "Ώ",
  "*A": "Α",
  "*A(": "Ἁ",
  "*A(/": "Ἅ",
  "*A(/|": "ᾍ",
  "*A(=": "Ἇ",
  "*A(=|": "ᾏ",
  "*A(\\": "Ἃ",
  "*A(\\|": "ᾋ",
  "*A(|": "ᾉ",
  "*A)": "Ἀ",
  "*A)/": "Ἄ",
  "*A)/|": "ᾌ",
  "*A)=": "Ἆ",
  "*A)=|": "ᾎ",
  "*A)\\": "Ἂ",
  "*A)\\|": "ᾊ",
  "*A)|": "ᾈ",
  "*A/": "Ά",
  "*A\\": "Ὰ",
  "*A|": "ᾼ",
  "*B": "Β",
  "*C": "Ξ",
  "*D": "Δ",
  "*E": "Ε",
  "*E(": "Ἑ",
  "*E(/": "Ἕ",
  "*E(\\": "Ἓ",
  "*E)": "Ἐ",
  "*E)/": "Ἔ",
  "*E)\\": "Ἒ",
  "*E/": "Έ",
  "*E\\": "Ὲ",
  "*F": "Φ",
  "*G": "Γ",
  "*H": "Η",
  "*H(": "Ἡ",
  "*H(/": "Ἥ",
  "*H(/|": "ᾝ",
  "*H(=": "Ἧ",
  "*H(=|": "ᾟ",
  "*H(\\": "Ἣ",
  "*H(\\|": "ᾛ",
  "*H(|": "ᾙ",
  "*H)": "Ἠ",
  "*H)/": "Ἤ",
  "*H)/|": "ᾜ",
  "*H)=": "Ἦ",
  "*H)=|": "ᾞ",
  "*H)\\": "Ἢ",
  "*H)\\|": "ᾚ",
  "*H)|": "ᾘ",
  "*H/": "Ή",
  "*H\\": "Ὴ",
  "*H|": "ῌ",
  "*I": "Ι",
  "*I(": "Ἱ",
  "*I(/": "Ἵ",
  "*I(=": "Ἷ",
  "*I(\\": "Ἳ",
  "*I)": "Ἰ",
  "*I)/": "Ἴ",
  "*I)=": "Ἶ",
  "*I)\\": "Ἲ",
  "*I+": "Ϊ",
  "*I/": "Ί",
  "*I\\": "Ὶ",
  "*J": "Σ",
  "*K": "Κ",
  "*L": "Λ",
  "*M": "Μ",
  "*N": "Ν",
  "*O": "Ο",
  "*O(": "Ὁ",
  "*O(/": "Ὅ",
  "*O(\\": "Ὃ",
  "*O)": "Ὀ",
  "*O)/": "Ὄ",
  "*O)\\": "Ὂ",
  "*O/": "Ό",
  "*O\\": "Ὸ",
  "*P": "Π",
  "*Q": "Θ",
  "*R": "Ρ",
  "*R(": "Ῥ",
  "*S": "Σ",
  "*S1": "Σ",
  "*S2": "Σ",
  "*S3": "Ϲ",
  "*T": "Τ",
  "*U": "Υ",
  "*U(": "Ὑ",
  "*U(/": "Ὕ",
  "*U(=": "Ὗ",
  "*U(\\": "Ὓ",
  "*U+": "Ϋ",
  "*U/": "Ύ",
  "*U\\": "Ὺ",
  "*W": "Ω",
  "*W(": "Ὡ",
  "*W(/": "Ὥ",
  "*W(/|": "ᾭ",
  "*W(=": "Ὧ",
  "*W(=|": "ᾯ",
  "*W(\\": "Ὣ",
  "*W(\\|": "ᾫ",
  "*W(|": "ᾩ",
  "*W)": "Ὠ",
  "*W)/": "Ὤ",
  "*W)/|": "ᾬ",
  "*W)=": "Ὦ",
  "*W)=|": "ᾮ",
  "*W)\\": "Ὢ",
  "*W)\\|": "ᾪ",
  "*W)|": "ᾨ",
  "*W/": "Ώ",
  "*W\\": "Ὼ",
  "*W|": "ῼ",
  "*X": "Χ",
  "*Y": "Ψ",
  "*Z": "Ζ",
  "*\\A": "Ὰ",
  "*\\E": "Ὲ",
  "*\\H": "Ὴ",
  "*\\I": "Ὶ",
  "*\\O": "Ὸ",
  "*\\U": "Ὺ",
  "*\\W": "Ὼ",
  "*\\a": "Ὰ",
  "*\\e": "Ὲ",
  "*\\h": "Ὴ",
  "*\\i": "Ὶ",
  "*\\o": "Ὸ",
  "*\\u": "Ὺ",
  "*\\w": "Ὼ",
  "*a": "Α",
  "*a(": "Ἁ",
  "*a(/": "Ἅ",
  "*a(/|": "ᾍ",
  "*a(=": "Ἇ",
  "*a(=|": "ᾏ",
  "*a(\\": "Ἃ",
  "*a(\\|": "ᾋ",
  "*a(|": "ᾉ",
  "*a)": "Ἀ",
  "*a)/": "Ἄ",
  "*a)/|": "ᾌ",
  "*a)=": "Ἆ",
  "*a)=|": "ᾎ",
  "*a)\\": "Ἂ",
  "*a)\\|": "ᾊ",
  "*a)|": "ᾈ",
  "*a/": "Ά",
  "*a\\": "Ὰ",
  "*a|": "ᾼ",
  "*b": "Β",
  "*c": "Ξ",
  "*d": "Δ",
  "*e": "Ε",
  "*e(": "Ἑ",
  "*e(/": "Ἕ",
  "*e(\\": "Ἓ",
  "*e)": "Ἐ",
  "*e)/": "Ἔ",
  "*e)\\": "Ἒ",
  "*e/": "Έ",
  "*e\\": "Ὲ",
  "*f": "Φ",
  "*g": "Γ",
  "*h": "Η",
  "*h(": "Ἡ",
  "*h(/": "Ἥ",
  "*h(/|": "ᾝ",
  "*h(=": "Ἧ",
  "*h(=|": "ᾟ",
  "*h(\\": "Ἣ",
  "*h(\\|": "ᾛ",
  "*h(|": "ᾙ",
  "*h)": "Ἠ",
  "*h)/": "Ἤ",
  "*h)/|": "ᾜ",
  "*h)=": "Ἦ",
  "*h)=|": "ᾞ",
  "*h)\\": "Ἢ",
  "*h)\\|": "ᾚ",
  "*h)|": "ᾘ",
  "*h/": "Ή",
  "*h\\": "Ὴ",
  "*h|": "ῌ",
  "*i": "Ι",
  "*i(": "Ἱ",
  "*i(/": "Ἵ",
  "*i(=": "Ἷ",
  "*i(\\": "Ἳ",
  "*i)": "Ἰ",
  "*i)/": "Ἴ",
  "*i)=": "Ἶ",
  "*i)\\": "Ἲ",
  "*i+": "Ϊ",
  "*i/": "Ί",
  "*i\\": "Ὶ",
  "*j": "Σ",
  "*k": "Κ",
  "*l": "Λ",
  "*m": "Μ",
  "*n": "Ν",
  "*o": "Ο",
  "*o(": "Ὁ",
  "*o(/": "Ὅ",
  "*o(\\": "Ὃ",
  "*o)": "Ὀ",
  "*o)/": "Ὄ",
  "*o)\\": "Ὂ",
  "*o/": "Ό",
  "*o\\": "Ὸ",
  "*p": "Π",
  "*q": "Θ",
  "*r": "Ρ",
  "*r(": "Ῥ",
  "*s": "Σ",
  "*s1": "Σ",
  "*s2": "Σ",
  "*s3": "Ϲ",
  "*t": "Τ",
  "*u": "Υ",
  "*u(": "Ὑ",
  "*u(/": "Ὕ",
  "*u(=": "Ὗ",
  "*u(\\": "Ὓ",
  "*u+": "Ϋ",
  "*u/": "Ύ",
  "*u\\": "Ὺ",
  "*w": "Ω",
  "*w(": "Ὡ",
  "*w(/": "Ὥ",
  "*w(/|": "ᾭ",
  "*w(=": "Ὧ",
  "*w(=|": "ᾯ",
  "*w(\\": "Ὣ",
  "*w(\\|": "ᾫ",
  "*w(|": "ᾩ",
  "*w)": "Ὠ",
  "*w)/": "Ὤ",
  "*w)/|": "ᾬ",
  "*w)=": "Ὦ",
  "*w)=|": "ᾮ",
  "*w)\\": "Ὢ",
  "*w)\\|": "ᾪ",
  "*w)|": "ᾨ",
  "*w/": "Ώ",
  "*w\\": "Ὼ",
  "*w|": "ῼ",
  "*x": "Χ",
  "*y": "Ψ",
  "*z": "Ζ",
  "*|A": "ᾼ",
  "*|H": "ῌ",
  "*|W": "ῼ",
  "*|a": "ᾼ",
  "*|h": "ῌ",
  "*|w": "ῼ",
  "+": " ̈",
  ",": ",",
  "-": "-",
  ".": ".",
  "/": " ́",
  ":": "·",
  ";": ";",
  "=": " ͂",
  "A": "α",
  "A(": "ἁ",
  "A(/": "ἅ",
  "A(/|": "ᾅ",
  "A(=": "ἇ",
  "A(=|": "ᾇ",
  "A(\\": "ἃ",
  "A(\\|": "ᾃ",
  "A(|": "ᾁ",
  "A)": "ἀ",
  "A)/": "ἄ",
  "A)/|": "ᾄ",
  "A)=": "ἆ",
  "A)=|": "ᾆ",
  "A)\\": "ἂ",
  "A)\\|": "ᾂ",
  "A)|": "ᾀ",
  "A/": "ά",
  "A/|": "ᾴ",
  "A=": "ᾶ",
  "A=|": "ᾷ",
  "A\\": "ὰ",
  "A\\|": "ᾲ",
  "A|": "ᾳ",
  "B": "β",
  "C": "ξ",
  "D": "δ",
  "E": "ε",
  "E(": "ἑ",
  "E(/": "ἕ",
  "E(\\": "ἓ",
  "E)": "ἐ",
  "E)/": "ἔ",
  "E)\\": "ἒ",
  "E/": "έ",
  "E\\": "ὲ",
  "F": "φ",
  "G": "γ",
  "H": "η",
  "H(": "ἡ",
  "H(/": "ἥ",
  "H(/|": "ᾕ",
  "H(=": "ἧ",
  "H(=|": "ᾗ",
  "H(\\": "ἣ",
  "H(\\|": "ᾓ",
  "H(|": "ᾑ",
  "H)": "ἠ",
  "H)/": "ἤ",
  "H)/|": "ᾔ",
  "H)=": "ἦ",
  "H)=|": "ᾖ",
  "H)\\": "ἢ",
  "H)\\|": "ᾒ",
  "H)|": "ᾐ",
  "H/": "ή",
  "H/|": "ῄ",
  "H=": "ῆ",
  "H=|": "ῇ",
  "H\\": "ὴ",
  "H\\|": "ῂ",
  "H|": "ῃ",
  "I": "ι",
  "I(": "ἱ",
  "I(/": "ἵ",
  "I(=": "ἷ",
  "I(\\": "ἳ",
  "I)": "ἰ",
  "I)/": "ἴ",
  "I)=": "ἶ",
  "I)\\": "ἲ",
  "I+": "ϊ",
  "I/": "ί",
  "I/+": "ΐ",
  "I=": "ῖ",
  "I=+": "ῗ",
  "I\\": "ὶ",
  "I\\+": "ῒ",
  "J": "ς",
  "K": "κ",
  "L": "λ",
  "M": "μ",
  "N": "ν",
  "O": "ο",
  "O(": "ὁ",
  "O(/": "ὅ",
  "O(\\": "ὃ",
  "O)": "ὀ",
  "O)/": "ὄ",
  "O)\\": "ὂ",
  "O/": "ό",
  "O\\": "ὸ",
  "P": "π",
  "Q": "θ",
  "R": "ρ",
  "R(": "ῥ",
  "R)": "ῤ",
  "S": "σ",
  "S1": "σ",
  "S2": "ς",
  "S3": "ϲ",
  "T": "τ",
  "U": "υ",
  "U(": "ὑ",
  "U(/": "ὕ",
  "U(=": "ὗ",
  "U(\\": "ὓ",
  "U)": "ὐ",
  "U)/": "ὔ",
  "U)=": "ὖ",
  "U)\\": "ὒ",
  "U+": "ϋ",
  "U/": "ύ",
  "U/+": "ΰ",
  "U=": "ῦ",
  "U=+": "ῧ",
  "U\\": "ὺ",
  "U\\+": "ῢ",
  "W": "ω",
  "W(": "ὡ",
  "W(/": "ὥ",
  "W(/|": "ᾥ",
  "W(=": "ὧ",
  "W(=|": "ᾧ",
  "W(\\": "ὣ",
  "W(\\|": "ᾣ",
  "W(|": "ᾡ",
  "W)": "ὠ",
  "W)/": "ὤ",
  "W)/|": "ᾤ",
  "W)=": "ὦ",
  "W)=|": "ᾦ",
  "W)\\": "ὢ",
  "W)\\|": "ᾢ",
  "W)|": "ᾠ",
  "W/": "ώ",
  "W/|": "ῴ",
  "W=": "ῶ",
  "W=|": "ῷ",
  "W\\": "ὼ",
  "W\\|": "ῲ",
  "W|": "ῳ",
  "X": "χ",
  "Y": "ψ",
  "Z": "ζ",
  "\\": "`",
  "_": "—",
  "a": "α",
  "a(": "ἁ",
  "a(/": "ἅ",
  "a(/|": "ᾅ",
  "a(=": "ἇ",
  "a(=|": "ᾇ",
  "a(\\": "ἃ",
  "a(\\|": "ᾃ",
  "a(|": "ᾁ",
  "a)": "ἀ",
  "a)/": "ἄ",
  "a)/|": "ᾄ",
  "a)=": "ἆ",
  "a)=|": "ᾆ",
  "a)\\": "ἂ",
  "a)\\|": "ᾂ",
  "a)|": "ᾀ",
  "a/": "ά",
  "a/|": "ᾴ",
  "a=": "ᾶ",
  "a=|": "ᾷ",
  "a\\": "ὰ",
  "a\\|": "ᾲ",
  "a|": "ᾳ",
  "b": "β",
  "c": "ξ",
  "d": "δ",
  "e": "ε",
  "e(": "ἑ",
  "e(/": "ἕ",
  "e(\\": "ἓ",
  "e)": "ἐ",
  "e)/": "ἔ",
  "e)\\": "ἒ",
  "e/": "έ",
  "e\\": "ὲ",
  "f": "φ",
  "g": "γ",
  "h": "η",
  "h(": "ἡ",
  "h(/": "ἥ",
  "h(/|": "ᾕ",
  "h(=": "ἧ",
  "h(=|": "ᾗ",
  "h(\\": "ἣ",
  "h(\\|": "ᾓ",
  "h(|": "ᾑ",
  "h)": "ἠ",
  "h)/": "ἤ",
  "h)/|": "ᾔ",
  "h)=": "ἦ",
  "h)=|": "ᾖ",
  "h)\\": "ἢ",
  "h)\\|": "ᾒ",
  "h)|": "ᾐ",
  "h/": "ή",
  "h/|": "ῄ",
  "h=": "ῆ",
  "h=|": "ῇ",
  "h\\": "ὴ",
  "h\\|": "ῂ",
  "h|": "ῃ",
  "i": "ι",
  "i(": "ἱ",
  "i(/": "ἵ",
  "i(=": "ἷ",
  "i(\\": "ἳ",
  "i)": "ἰ",
  "i)/": "ἴ",
  "i)=": "ἶ",
  "i)\\": "ἲ",
  "i+": "ϊ",
  "i/": "ί",
  "i/+": "ΐ",
  "i=": "ῖ",
  "i=+": "ῗ",
  "i\\": "ὶ",
  "i\\+": "ῒ",
  "j": "ς",
  "k": "κ",
  "l": "λ",
  "m": "μ",
  "n": "ν",
  "o": "ο",
  "o(": "ὁ",
  "o(/": "ὅ",
  "o(\\": "ὃ",
  "o)": "ὀ",
  "o)/": "ὄ",
  "o)\\": "ὂ",
  "o/": "ό",
  "o\\": "ὸ",
  "p": "π",
  "q": "θ",
  "r": "ρ",
  "r(": "ῥ",
  "r)": "ῤ",
  "s": "σ",
  "s1": "σ",
  "s2": "ς",
  "s3": "ϲ",
  "t": "τ",
  "u": "υ",
  "u(": "ὑ",
  "u(/": "ὕ",
  "u(=": "ὗ",
  "u(\\": "ὓ",
  "u)": "ὐ",
  "u)/": "ὔ",
  "u)=": "ὖ",
  "u)\\": "ὒ",
  "u+": "ϋ",
  "u/": "ύ",
  "u/+": "ΰ",
  "u=": "ῦ",
  "u=+": "ῧ",
  "u\\": "ὺ",
  "u\\+": "ῢ",
  "w": "ω",
  "w(": "ὡ",
  "w(/": "ὥ",
  "w(/|": "ᾥ",
  "w(=": "ὧ",
  "w(=|": "ᾧ",
  "w(\\": "ὣ",
  "w(\\|": "ᾣ",
  "w(|": "ᾡ",
  "w)": "ὠ",
  "w)/": "ὤ",
  "w)/|": "ᾤ",
  "w)=": "ὦ",
  "w)=|": "ᾦ",
  "w)\\": "ὢ",
  "w)\\|": "ᾢ",
  "w)|": "ᾠ",
  "w/": "ώ",
  "w/|": "ῴ",
  "w=": "ῶ",
  "w=|": "ῷ",
  "w\\": "ὼ",
  "w\\|": "ῲ",
  "w|": "ῳ",
  "x": "χ",
  "y": "ψ",
  "z": "ζ"
}

},{}],3:[function(require,module,exports){
module.exports={
  " ́": "/",
  " ̈": "+",
  " ͂": "=",
  ",": ",",
  "-": "-",
  ".": ".",
  ";": ";",
  "`": "\\",
  "·": ":",
  "ʹ": "#",
  "ʼ": ")",
  "ʽ": "(",
  "Ά": "*/a",
  "Έ": "*/e",
  "Ή": "*/h",
  "Ί": "*/i",
  "Ό": "*/o",
  "Ύ": "*/u",
  "Ώ": "*/w",
  "ΐ": "i/+",
  "Α": "*a",
  "Β": "*b",
  "Γ": "*g",
  "Δ": "*d",
  "Ε": "*e",
  "Ζ": "*z",
  "Η": "*h",
  "Θ": "*q",
  "Ι": "*i",
  "Κ": "*k",
  "Λ": "*l",
  "Μ": "*m",
  "Ν": "*n",
  "Ξ": "*c",
  "Ο": "*o",
  "Π": "*p",
  "Ρ": "*r",
  "Σ": "*s",
  "Τ": "*t",
  "Υ": "*u",
  "Φ": "*f",
  "Χ": "*x",
  "Ψ": "*y",
  "Ω": "*w",
  "Ϊ": "*+i",
  "Ϋ": "*+u",
  "ά": "a/",
  "έ": "e/",
  "ή": "h/",
  "ί": "i/",
  "ΰ": "u/+",
  "α": "a",
  "β": "b",
  "γ": "g",
  "δ": "d",
  "ε": "e",
  "ζ": "z",
  "η": "h",
  "θ": "q",
  "ι": "i",
  "κ": "k",
  "λ": "l",
  "μ": "m",
  "ν": "n",
  "ξ": "c",
  "ο": "o",
  "π": "p",
  "ρ": "r",
  "ς": "s",
  "σ": "s",
  "τ": "t",
  "υ": "u",
  "φ": "f",
  "χ": "x",
  "ψ": "y",
  "ω": "w",
  "ϊ": "i+",
  "ϋ": "u+",
  "ό": "o/",
  "ύ": "u/",
  "ώ": "w/",
  "ϲ": "s3",
  "Ϲ": "*s3",
  "ἀ": "a)",
  "ἁ": "a(",
  "ἂ": "a)\\",
  "ἃ": "a(\\",
  "ἄ": "a)/",
  "ἅ": "a(/",
  "ἆ": "a)=",
  "ἇ": "a(=",
  "Ἀ": "*)a",
  "Ἁ": "*(a",
  "Ἂ": "*)\\a",
  "Ἃ": "*(\\a",
  "Ἄ": "*)/a",
  "Ἅ": "*(/a",
  "Ἆ": "*)=a",
  "Ἇ": "*(=a",
  "ἐ": "e)",
  "ἑ": "e(",
  "ἒ": "e)\\",
  "ἓ": "e(\\",
  "ἔ": "e)/",
  "ἕ": "e(/",
  "Ἐ": "*)e",
  "Ἑ": "*(e",
  "Ἒ": "*)\\e",
  "Ἓ": "*(\\e",
  "Ἔ": "*)/e",
  "Ἕ": "*(/e",
  "ἠ": "h)",
  "ἡ": "h(",
  "ἢ": "h)\\",
  "ἣ": "h(\\",
  "ἤ": "h)/",
  "ἥ": "h(/",
  "ἦ": "h)=",
  "ἧ": "h(=",
  "Ἠ": "*)h",
  "Ἡ": "*(h",
  "Ἢ": "*)\\h",
  "Ἣ": "*(\\h",
  "Ἤ": "*)/h",
  "Ἥ": "*(/h",
  "Ἦ": "*)=h",
  "Ἧ": "*(=h",
  "ἰ": "i)",
  "ἱ": "i(",
  "ἲ": "i)\\",
  "ἳ": "i(\\",
  "ἴ": "i)/",
  "ἵ": "i(/",
  "ἶ": "i)=",
  "ἷ": "i(=",
  "Ἰ": "*)i",
  "Ἱ": "*(i",
  "Ἲ": "*)\\i",
  "Ἳ": "*(\\i",
  "Ἴ": "*)/i",
  "Ἵ": "*(/i",
  "Ἶ": "*)=i",
  "Ἷ": "*(=i",
  "ὀ": "o)",
  "ὁ": "o(",
  "ὂ": "o)\\",
  "ὃ": "o(\\",
  "ὄ": "o)/",
  "ὅ": "o(/",
  "Ὀ": "*)o",
  "Ὁ": "*(o",
  "Ὂ": "*)\\o",
  "Ὃ": "*(\\o",
  "Ὄ": "*)/o",
  "Ὅ": "*(/o",
  "ὐ": "u)",
  "ὑ": "u(",
  "ὒ": "u)\\",
  "ὓ": "u(\\",
  "ὔ": "u)/",
  "ὕ": "u(/",
  "ὖ": "u)=",
  "ὗ": "u(=",
  "Ὑ": "*(u",
  "Ὓ": "*(\\u",
  "Ὕ": "*(/u",
  "Ὗ": "*(=u",
  "ὠ": "w)",
  "ὡ": "w(",
  "ὢ": "w)\\",
  "ὣ": "w(\\",
  "ὤ": "w)/",
  "ὥ": "w(/",
  "ὦ": "w)=",
  "ὧ": "w(=",
  "Ὠ": "*)w",
  "Ὡ": "*(w",
  "Ὢ": "*)\\w",
  "Ὣ": "*(\\w",
  "Ὤ": "*)/w",
  "Ὥ": "*(/w",
  "Ὦ": "*)=w",
  "Ὧ": "*(=w",
  "ὰ": "a\\",
  "ὲ": "e\\",
  "ὴ": "h\\",
  "ὶ": "i\\",
  "ὸ": "o\\",
  "ὺ": "u\\",
  "ὼ": "w\\",
  "ᾀ": "a)|",
  "ᾁ": "a(|",
  "ᾂ": "a)\\|",
  "ᾃ": "a(\\|",
  "ᾄ": "a)/|",
  "ᾅ": "a(/|",
  "ᾆ": "a)=|",
  "ᾇ": "a(=|",
  "ᾈ": "*)a|",
  "ᾉ": "*(a|",
  "ᾊ": "*)\\a|",
  "ᾋ": "*(\\a|",
  "ᾌ": "*)/a|",
  "ᾍ": "*(/a|",
  "ᾎ": "*)=a|",
  "ᾏ": "*(=a|",
  "ᾐ": "h)|",
  "ᾑ": "h(|",
  "ᾒ": "h)\\|",
  "ᾓ": "h(\\|",
  "ᾔ": "h)/|",
  "ᾕ": "h(/|",
  "ᾖ": "h)=|",
  "ᾗ": "h(=|",
  "ᾘ": "*)h|",
  "ᾙ": "*(h|",
  "ᾚ": "*)\\h|",
  "ᾛ": "*(\\h|",
  "ᾜ": "*)/h|",
  "ᾝ": "*(/h|",
  "ᾞ": "*)=h|",
  "ᾟ": "*(=h|",
  "ᾠ": "w)|",
  "ᾡ": "w(|",
  "ᾢ": "w)\\|",
  "ᾣ": "w(\\|",
  "ᾤ": "w)/|",
  "ᾥ": "w(/|",
  "ᾦ": "w)=|",
  "ᾧ": "w(=|",
  "ᾨ": "*)w|",
  "ᾩ": "*(w|",
  "ᾪ": "*)\\w|",
  "ᾫ": "*(\\w|",
  "ᾬ": "*)/w|",
  "ᾭ": "*(/w|",
  "ᾮ": "*)=w|",
  "ᾯ": "*(=w|",
  "ᾲ": "a\\|",
  "ᾳ": "a|",
  "ᾴ": "a/|",
  "ᾶ": "a=",
  "ᾷ": "a=|",
  "Ὰ": "*\\a",
  "ᾼ": "*a|",
  "᾽": "'",
  "ῂ": "h\\|",
  "ῃ": "h|",
  "ῄ": "h/|",
  "ῆ": "h=",
  "ῇ": "h=|",
  "Ὲ": "*\\e",
  "Ὴ": "*\\h",
  "ῌ": "*h|",
  "ῒ": "i\\+",
  "ῖ": "i=",
  "ῗ": "i=+",
  "Ὶ": "*\\i",
  "ῢ": "u\\+",
  "ῤ": "r)",
  "ῥ": "r(",
  "ῦ": "u=",
  "ῧ": "u=+",
  "Ὺ": "*\\u",
  "Ῥ": "*(r",
  "ῲ": "w\\|",
  "ῳ": "w|",
  "ῴ": "w/|",
  "ῶ": "w=",
  "ῷ": "w=|",
  "Ὸ": "*\\o",
  "Ὼ": "*\\w",
  "ῼ": "*w|",
  "—": "_"
}

},{}]},{},[1])(1)
});